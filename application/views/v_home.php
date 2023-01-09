<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perpustakaan BPS Kota Malang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/gambar/logo.png" rel="icon">
  <link href="<?php echo base_url();?>Bootslander/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url();?>Bootslander/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>Bootslander/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Bootslander/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Bootslander/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Bootslander/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Bootslander/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Bootslander/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Bootslander/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>Bootslander/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.9.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><span>Perpustakaan</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="<?php echo base_url();?>login"><img src="<?php echo base_url();?>Bootslander/assets/img/logo_bps.png" alt="" class="img-fluid" width="250" height="100"></a> -->
        <a href="<?php echo base_url();?>login"><img src="<?php echo base_url();?>Bootslander/assets/img/logobps.png" alt="" class="img-fluid" width="230" height="100"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#team">Catalogue</a></li>
          <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url()?>feedback/tambah_feedback">Feedback</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Perpustakaan <br> 
            <span>BPS Kota Malang</span></h1>
            <h2>Melayani dengan Profesional, Integritas dan Amanah</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="katalog" class="btn-get-started scrollto">Our Catalogue</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <br><br><br><br><br>
          <img src="<?php echo base_url();?>Bootslander/assets/img/home/features-2.png" class="img-fluid animated" alt="">
          </br></br></br></br>
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>About Us</p>
      </div>

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          <a href="<?php echo base_url();?>video/perpus.mp4" class="glightbox play-btn mb-4"></a>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3>PERPUSTAKAAN BPS KOTA MALANG</h3>
          <p>Selamat datang di Perpustakaan BPS Kota Malang!<br> Di website ini Anda dapat menemukan berbagai layanan yang kami sediakan, reservasi kunjungan langsung, informasi pustaka buku statistik dan informasi kontak yang dapat dihubungi. #MelayaniDenganHati❤️</p>

          <!-- <h4>Pelayanan Perpustakaan Terpadu BPS Kota Malang</h4> -->
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="bx bx-book"></i></div>
            <h4 class="title"><a href="">Koleksi Buku</a></h4>
            <p class="description">Bagi sahabat data dapat membaca koleksi buku perpustakaan pada website ini <br> di menu katalog berupa e-book</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="bx bx-data"></i></div>
            <h4 class="title"><a href="">Permintaan Data</a></h4>
            <p class="description">Bagi konsumen data yang datang langsung ke BPS dapat dilayani di Ruang Perpustakaan, Ruang Galeri Buku dan Ruang Konsultasi Statistik.</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4 class="title"><a href="">Pelayanan Umum</a></h4>
            <p class="description">Konsultasi terkait data, metadata, klasifikasi, dan produk statistik BPS lainnya.</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h3>STANDAR PELAYANAN PERPUSTAKAAN</h3>
  </header>

  <div class="row">
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="box">
        <img src="<?php echo base_url();?>Bootslander/assets/img/receptionist.jpg" class="img-fluid" alt="">
        <h3>Resceptionist</h3>
        <p>Pengunjung datang ke Pelayanan Statistik Terpadu (PST) BPS Kota Malang</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
      <div class="box">
        <img src="<?php echo base_url();?>Bootslander/assets/img/bukutamu.jpg" class="img-fluid" alt="">
        <h3>Mengisi Buku Tamu</h3>
        <p>Pengunjung mengisi data diri secara lengkap di Buku Tamu Elektronik PST BPS Kota Malang</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
      <div class="box">
        <img src="<?php echo base_url();?>Bootslander/assets/img/perpus.jpg" class="img-fluid" alt="">
        <h3>Perpustakaan Tercetak</h3>
        <p>Pengunjung dapat menggunakan publikasi tercetak yang tersedia di Perpustakaan PST BPS Kota Malang</p>
      </div>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="box">
        <img src="<?php echo base_url();?>Bootslander/assets/img/e-library.jpg" class="img-fluid" alt="">
        <h3>E-Library</h3>
        <p>Pengunjung juga dapat memanfaatkan perpustakaan digital PST BPS Kota Malang</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
      <div class="box">
        <img src="<?php echo base_url();?>Bootslander/assets/img/form.jpg" class="img-fluid" alt="">
        <h3>Form Permintaan</h3>
        <p>Pengunjung mengisi form permintaan data digital</p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
      <div class="box">
        <img src="<?php echo base_url();?>Bootslander/assets/img/end.png" class="img-fluid" alt="">
        <h3>Pelayanan Selesai</h3>
        <p>Pengunjung telah selesai melakukan kunjungan. Selanjutnya dapat memberikan kritik dan saran pada form <a href="<?= base_url()?>feedback/tambah_feedback" class="text-primary">Feedback</a></p>
      </div>
    </div>

  </div>
</div>

</section><!-- End Values Section -->

  <!-- ======= Catalogue Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Catalogue</h2>
        <p>Check Our Catalogue</p>
      </div>

      <div class="row" data-aos="fade-left">

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="<?php echo base_url();?>Bootslander/assets/img/buku/bk4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Statistik Indonesia Dalam Infografis</h4>
              <!-- <span>Chief Executive Officer</span> -->
              <a href="<?= base_url()?>detailbuku" class="text-primary"><span>Selengkapnya</span></a>
              <!-- <a href="<?= base_url()?>detailbuku" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="<?php echo base_url();?>Bootslander/assets/img/buku/bk3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Statistik Indonesia 2022</h4>
              <!-- <span>Product Manager</span> -->
              <a href="<?= base_url()?>detailbuku" class="text-primary"><span>Selengkapnya</span></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <div class="pic"><img src="<?php echo base_url();?>Bootslander/assets/img/buku/bk4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Statistik Indonesia Dalam Infografis</h4>
              <!-- <span>CTO</span> -->
              <a href="<?= base_url()?>detailbuku" class="text-primary"><span>Selengkapnya</span></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <div class="pic"><img src="<?php echo base_url();?>Bootslander/assets/img/buku/bk5.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Potret Sensus Penduduk</h4>
              <!-- <span>Accountant</span> -->
              <a href="<?= base_url()?>detailbuku" class="text-primary"><span>Selengkapnya</span></a>
            </div>
          </div>
        </div>

        <div class="text-center">
              <br><br>
              <a href="<?= base_url()?>katalog" class="btn-get-started scrollto">More Catalogue</a>
              </br>
        </div>

      </div>

    </div>
  </section><!-- End Catalogue Section -->

  <!-- ======= TQuotes Section ======= -->
  <section id="testimonials" class="testimonials">  
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?php echo base_url();?>Bootslander/assets/img/quotes/Margo-Yuwono.jpg" class="testimonial-img" alt="">
              <h3>Margo Yuwono</h3>
              <h4>Kepala BPS</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Bersama-bersama, kita telah membuktikan bahwa BPS tetap mampu menyediakan data secara tepat waktu dan tetap menjaga kualitasnya sesuai dengan komitmen yang kita bangun dari awal.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?php echo base_url();?>Bootslander/assets/img/quotes/ss.jpg" class="testimonial-img" alt="">
              <h3>Setianto</h3>
              <h4>Deputi BPS</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Statistik bukan sekedar angka, tapi kunci menuju kesuksesan dan kesejahteraan.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
          
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?php echo base_url();?>Bootslander/assets/img/quotes/AE.jpg" class="testimonial-img" alt="">
              <h3>Albert Einstein</h3>
              <h4>Fisikawan</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                The only thing that you absolutely have to know, is the location of the library.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?php echo base_url();?>Bootslander/assets/img/quotes/Najwa-Sihab.jpg" class="testimonial-img" alt="">
              <h3>Najwa Shihab</h3>
              <h4>Jurnalis</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Membaca ialah upaya merekuk makna ikhtiar untuk memahami alam semesta. Itulah mengapa buku disebut jendela dunia, yang merangsang pikiran agar terus terbuka.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?php echo base_url();?>Bootslander/assets/img/quotes/Fran-Lebowitz.jpg" class="testimonial-img" alt="">
              <h3>Fran Lebowitz</h3>
              <h4>Penulis</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Think before you speak. Read before you think.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>Jl. Janti Barat Nomor 47, Sukun, Kota Malang, Indonesia</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>bps3573@bps.go.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telepon:</h4>
              <p>0341-801164</p>
            </div>

            <div class="calendar">
              <i class="bi bi-calendar"></i>
              <h4>Jadwal Buka:</h4>
              <p>Senin-Kamis, 08.00-16.00 WIB
                <br>
                Jumat, 08.00-15.00 WIB
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div class="peta">
            <div class="section-title" data-aos="fade-up">
              <h4>Peta Lokasi BPS Kota Malang</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.976356099664!2d112.6189741141568!3d-8.001374982035772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628003e38fe73%3A0x3aa76fdd366c7827!2sBadan%20Pusat%20Statistik%20(BPS)%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1670313704268!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section --> 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BPS Kota Malang</h3>
            <p>
              Jl. Janti Barat No.47 Kota Malang<br>
              Indonesia<br><br>
              <strong>Phone:</strong> 0341-801164<br>
              <strong>Email:</strong> bps3573@bps.go.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Catalogue</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url()?>feedback/tambah_feedback">Feedback</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Unit Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Koleksi Buku</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Permintaan Data</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pelayanan Umum</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Sosial Media</h4>
            <p>Temukan hal yang menarik hanya di media sosial kami!</p>
            <div class="social-links mt-3">
                <a href="https://instagram.com/bpskotamalang" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6281250503573" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.youtube.com/channel/UCkKOTKDtStYq4YTRvjAAy6w" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.twitter.com/bps_statistics" class="twitter"><i class="bx bxl-twitter"></i></a>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
              <br>
              <img src="<?php echo base_url();?>Bootslander/assets/img/berakhlak.png" class="img-fluid animated" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BPS Kota Malang</span></strong>. All Rights Reserved 2022
      </div>
      <!-- <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      <!-- </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>Bootslander/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url();?>Bootslander/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url();?>Bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>Bootslander/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url();?>Bootslander/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url();?>Bootslander/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>Bootslander/assets/js/main.js"></script>

</body>

</html>