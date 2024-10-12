<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PENGMAS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.svg" rel="icon">
  <link href="assets/img/favicon.svg" rel="favicon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <h1 class="sitename">PENGMAS</h1>
        <!-- <img src="assets/img/lgpengaduan.png" alt="" style="width: 200px; height: 200px;"> -->
        <!-- Uncomment the line below if you also wish to use text logo -->
        <!-- <h1 class="sitename">Butterfly</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">

        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#services">Tata Cara</a></li>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start" data-aos="fade-up">
            <h2>Layanan Pengaduan Masyarakat &amp; Online</h2>
            <p>Sampaikan laporan masalah Anda di sini, kami akan memprosesnya
              dengan cepat.</p>
            <div class="d-flex mt-4 justify-content-center justify-content-md-start" style="gap: 25px;">
              <a href="{{ route('pengaduan.create') }}" class="cta-btn">Laporkan</a>
              <a href="{{ route('pengaduan.cek-pengaduan') }}" class="cta-btn">Cek Aduan</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->



    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tata Cara</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex flex-column justify-content-center align-items-center text-center" style="height: 350px;">
              <div class="image-container mb-3">
                <img src="assets/img/tulis.svg" alt="tulis" class="img-fluid d-block mx-auto">
              </div>
              <h3>1. Tulis Laporan</h3>
              <p>Tulis laporan keluhan Anda dengan jelas.</p>
            </div>
          </div>


          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative d-flex flex-column justify-content-center align-items-center text-center">
              <div class="image-container mb-3">
                <img src="assets/img/proses.svg" alt="proses" class="img-fluid d-block mx-auto">
              </div>
              <h3>2. Proses Verifikasi</h3>
              <p>Tunggu sampai laporan Anda di verifikasi.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative d-flex flex-column justify-content-center align-items-center text-center">
              <div class="image-container mb-3">
                <img src="assets/img/aksi.svg" alt="aksi" class="img-fluid d-block mx-auto">
              </div>
              <h3>3. Tindak Lanjut</h3>
              <p>Laporan Anda sedang dalam tindak lanjut.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative d-flex flex-column justify-content-center align-items-center text-center">
              <div class="image-container mb-3">
                <img src="assets/img/end.svg" alt="selesai" class="img-fluid d-block mx-auto">
              </div>
              <h3>4. Selesai</h3>
              <p>Laporan pengaduan telah selesai ditindak.</p>
            </div>
          </div>

    </section><!-- /Services Section -->



    </div>

    </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">



    </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p> <span>PENGMAS |</span> <strong class="px-1 sitename">DISKOMINFOSAN</strong></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <a href="https://twitter.com/kominfo_tamiang"><i class="bi bi-twitter-x"></i></a>
        <a href="https://m.facebook.com/profile.php?id=100064666326701"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dinaskominfoacehtamiang/"><i class="bi bi-instagram"></i></a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>