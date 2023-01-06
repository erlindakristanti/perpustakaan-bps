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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo d-flex align-items-center"> -->
        <!-- <img src="<?php echo base_url();?>Bootslander/assets/img/Bps.png" alt=""> -->
        <!-- <span>FlexStart</span> -->
        <!-- <h1><a href="<?php echo base_url();?>Home"><span>Perpustakaan</span></a></h1> -->
        <!-- <a href=""><img src="<?php echo base_url();?>Bootslander/assets/img/logo_bps.png" alt="" class="img-fluid" width="250" height="100"></a> -->
        <a href=""><img src="<?php echo base_url();?>Bootslander/assets/img/logobps.png" alt="" class="img-fluid" width="230" height="100"></a>
      <!-- </a> -->

      <!-- <div class="logo"> -->
        <!-- <h1><a href="index.html"><span>Bootslander</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?php echo base_url();?>Bootslander/assets/img/Bps.png" alt="" class="img-fluid" width="350" height="150"></a>
      </div> -->

      <nav id="navbar" class="navbar">
        <!-- <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#team">Catalogue</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul> -->
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url()?>Home">Home</a></li>
          <li>Katalog Buku</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    

    <!-- <div class="col-lg-6">

      <div class="sidebar">

        <h3 class="sidebar-title">Search</h3>
        <div class="sidebar-item search-form">
          <form action="">
            <input type="text">
            <button type="submit"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>
    </div> -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

      <div class="judul-katalog" data-aos="fade-up">
        <!-- <h2>About</h2> -->
        <center><p>Online Public Access Catalogue</p><center>
      </div>

      <div class="search" data-aos="fade-up"> 
        <div class="col-py-4">
          <form action="" method="GET" style="margin: 0 auto; width: 100%" class="w-100">
            <div class="bg-light rounded shadow-blue-md mb-2">
              <div class="input-group">
                <input type="text" placeholder="Masukkan judul atau kata kunci pustaka" aria-describedby="button-addon1" class="form-control form-input check-value border-1 rounded text-dark" style="border: 0px solid #3d84b8; box-shadow: 0px 1px 5px #3d84b8;" name="q" value="">
                <input type="hidden" name="subyek" value="">
                <input type="hidden" name="media" value="no">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-link bi bi-search"><i data-feather="search"></i></button>
                </div>
              </div>
            </div>
          <div class="form-check">
            &nbsp;
              <input class="form-check-input" type="checkbox" value="match_whole" id="match_whole" name="match_whole">
              <label class="form-check-label" for="match_whole">Cocokkan seluruh kata</label>
          </div>
          </form>
        </div>
      </div>
      
    

<div class="row" data-aos="fade-left">

<div class="col-lg-3 col-md-6">
  <div class="member" data-aos="zoom-in" data-aos-delay="100">
    <div class="pic"><img src="<?php echo base_url();?>Bootslander/assets/img/buku/bk4.jpg" class="img-fluid" alt=""></div>
    <div class="member-info">
      <h4>Walter White</h4>
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
      <h4>Sarah Jhonson</h4>
      <!-- <span>Product Manager</span> -->
      <a href="register.html" class="text-primary"><span>Selengkapnya</span></a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
  <div class="member" data-aos="zoom-in" data-aos-delay="300">
    <div class="pic"><img src="<?php echo base_url();?>Bootslander/assets/img/buku/bk4.jpg" class="img-fluid" alt=""></div>
    <div class="member-info">
      <h4>William Anderson</h4>
      <!-- <span>CTO</span> -->
      <a href="register.html" class="text-primary"><span>Selengkapnya</span></a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
  <div class="member" data-aos="zoom-in" data-aos-delay="400">
    <div class="pic"><img src="<?php echo base_url();?>Bootslander/assets/img/buku/bk5.jpg" class="img-fluid" alt=""></div>
    <div class="member-info">
      <h4>Amanda Jepson</h4>
      <!-- <span>Accountant</span> -->
      <a href="register.html" class="text-primary"><span>Selengkapnya</span></a>
    </div>
  </div>
</div>

<!-- <div class="text-center">
      <br><br>
      <a href="<?= base_url()?>katalog" class="btn-get-started scrollto">More Catalogue</a>
      </br>
</div> -->

</div>

      </div>
    </section><!-- End Team Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Unit Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Koleksi Buku</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Permintaan Data</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pelayanan Umum</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
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