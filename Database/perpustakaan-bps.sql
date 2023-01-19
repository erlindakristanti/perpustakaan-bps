-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 01:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan-bps`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(25) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `issn` varchar(20) NOT NULL,
  `no_publikasi` varchar(20) NOT NULL,
  `no_katalog` varchar(20) NOT NULL,
  `ukuran_buku` varchar(20) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `naskah` varchar(20) NOT NULL,
  `id_penyunting` int(11) NOT NULL,
  `id_penerbit` varchar(15) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `issn`, `no_publikasi`, `no_katalog`, `ukuran_buku`, `halaman`, `naskah`, `id_penyunting`, `id_penerbit`, `foto`) VALUES
('B0002', 'Matematika k', '0', '', '', '', '', '', 0, 'P001', 'unicorn_1.jpg'),
('B0004', 'Statistik Indonesia 2022', '53725', '32647-634', '764.87', '19 x 70', '120', 'BPS Kota Malang', 1, 'P001', 'bk3.jpg'),
('B0005', 'Statistik Indonesia Dalam Info', '53725', '32647-634', '764.87', '19 x 70', 'xii + 56', 'BPS Kota Malang', 1, 'P001', 'bk4.jpg'),
('B0006', 'Statistik Indonesia Dalam Info', '53725', '32647-634', '764.87', '19 x 70', '120', 'BPS Kota Malang', 1, 'P001', 'bk41.jpg'),
('B0007', 'Potret Sensus Penduduk', '53725', '32647-634', '764.87', '19 x 70', '120', 'BPS Kota Malang', 1, 'P001', 'bk5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `email`, `subject`, `message`) VALUES
(1, 'Feedback', 'coba@feedback.com', ' Feedback', 'Kritik dan Saran');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama`, `foto`) VALUES
(1, 'buku', '6329002.jpg'),
(3, 'Erlinda Kristanti', 'unicorn_1.jpg'),
(4, 'buku', 'unicorn_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` varchar(15) NOT NULL,
  `id_buku` varchar(15) NOT NULL,
  `e_book` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `id_buku`, `e_book`) VALUES
('K0002', 'B0002', 'Third-Party-Notices.pdf'),
('K0003', 'B0004', 'Third-Party-Notices1.pdf'),
('K0004', 'B0005', 'Third-Party-Notices2.pdf'),
('K0005', 'B0006', 'Third-Party-Notices3.pdf'),
('K0006', 'B0007', 'Third-Party-Notices4.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
('A003', 'Erlinda', 'super admin', '1234', 'Super Admin'),
('A004', 'Erlinda Kristanti', 'admin', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(50) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
('P001', 'Gramedia Pustaka Utamaa'),
('P002', 'Grasindo');

-- --------------------------------------------------------

--
-- Table structure for table `penyunting`
--

CREATE TABLE `penyunting` (
  `id_penyunting` int(15) NOT NULL,
  `nama_penyunting` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyunting`
--

INSERT INTO `penyunting` (`id_penyunting`, `nama_penyunting`) VALUES
(1, 'BPS Kota Malang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `penyunting`
--
ALTER TABLE `penyunting`
  ADD PRIMARY KEY (`id_penyunting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penyunting`
--
ALTER TABLE `penyunting`
  MODIFY `id_penyunting` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
