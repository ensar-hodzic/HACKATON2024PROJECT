<?php 
 require_once "assets/php/signup_view.inc.php";
 require_once "assets/php/config_session.inc.php";

 require_once "assets/php/login_view.inc.php";
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>MARINA AI - Advanced writing</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel= "icon" href = "assets/img/harisovSVG.svg" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body
    class="services-details-page"
    data-bs-spy="scroll"
    data-bs-target="#navmenu"
  >
     <!-- ======= Header ======= -->
     <header id="header" class="header fixed-top d-flex align-items-center">
      <div
        class="container-fluid d-flex align-items-center justify-content-between  mx-5"
      >
        <a
          href="index.php"
          class="d-flex align-items-center me-auto me-xl-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/logoMarinaLong.png" alt="" class="me-5" width="150">
          <!-- <h1>Append</h1>
          <span>.</span> -->
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php#hero" class="active">Home</a></li>
            <li><a href="index.php#about">O nama</a></li>
            <li><a href="index.php#services">Naše usluge</a></li>
            <li><a href="analizaeseja.php">Analiza eseja</a></li>

           
          </ul>

          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- End Nav Menu -->

        <a class="btn-getstarted" href="index.php#call-to-action">Odjavi se</a>
      </div>
    </header>
    <!-- End Header -->


    <main id="main">
      <!-- Page Title -->
      <div data-aos="fade" class="page-title">
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="index.php">Glavna stranica</a></li>
              <li class="current">Analiza eseja</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Page Title -->

      <!-- Service Details Section -->
      <section id="service-details" class="service-details analizaeseja_main">
        <div class="container">
          <div class="row gy-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
              <div class="service-box">
                <h4>Odaberite uzrast</h4>
                <div class="age-content">
                  <div class="wrapper">
                    <input type="radio" name="select" id="option-1">
                    <input type="radio" name="select" id="option-2">
                    <input type="radio" name="select" id="option-3">
                    <input type="radio" name="select" id="option-4">
                      <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                         <span>1. - 4. razred osnovne</span>
                         </label>
                      <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                         <span>5. - 7. razred osnovne</span>
                      </label>
                      <label for="option-3" class="option option-3">
                        <div class="dot"></div>
                         <span>8. - 9. razred osnovne</span>
                      </label>
                      <label for="option-4" class="option option-4">
                        <div class="dot"></div>
                         <span>1. - 4. razred srednje</span>
                      </label>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
              <div class="service-box">
                <h4>Odaberite temu</h4>
                <div class="age-content">
                  <div class="wrapper">

                      <input type="radio" name="ay" id="option-5">
                      <label for="option-5" class="option option-5">
                        <div class="dot"></div>
                        <span id="span-5">Moralna dilema modernih tehnoloških napredaka</span>
                      </label>

                      <input type="radio" name="ay" id="option-6">
                      <label for="option-6" class="option option-6">
                        <div class="dot"></div>
                       <span id="span-6">Utjecaj umjetne inteligencije na budućnost obrazovanja</span>
                      </label>

                      <input type="radio" name="ay" id="option-7">
                      <label for="option-7" class="option option-7">
                         <div class="dot"></div>
                         <span id="span-7">Fenomen selfija: samopredstavljanje u digitalno doba</span>
                      </label>
                    </div>
                  </div>
          <form action="assets/php/analizaeseja.inc.php" method="post">
                  <h4 class="mt-3">Ili unesite svoju temu</h4>
                      <div class="d-flex">
                        <input type="text" class="form-control p-2" id="theme-input" placeholder="Unesite svoju temu..." name="theTitle">
                        <!-- <button class="btn btn-danger py-2">Potvrdi</button> -->
                      </div>
                </div>
              </div>
            </div>
          <div class="row mt-4">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
              <div class="service-box">
                <h4>Napišite vaš esej</h4>
                <textarea class="texty" name="essayText"></textarea>
                </div>
              </div>
            </div>
          <div class="row mt-4">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <a href="analizasummary.php"><button class="batan" id="batane" type="submit">Analiziraj</button></a>
          </form>
          </div>
          <div class="row mt-4">
          </div>
          </div>
      </section>
      <!-- End Service-details Section -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-about">
            <a href="index.php" class="logo d-flex align-items-center">
              <span>M A R I N A</span>
            </a>
            <p>
              
            </p>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Korisni linkovi</h4>
            <ul>
              <li><a href="http://localhost:5500/index.php#hero">Home</a></li>
              <li><a href="http://localhost:5500/index.php#about">O Nama</a></li>
              <li><a href="http://localhost:5500/index.php#services">Naše usluge</a></li>
              <li><a href="http://localhost:5500/analizaeseja.php">Analiza eseja</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Kontaktirajte nas</h4>
            <p>Sarajevo, Trg nezavisnosti 69</p>
            <p>Bosna i Hercegovina</p>
            <p class="mt-4">
              <strong>Telefon:</strong> <span>+387 62 655 445</span>
            </p>
            <p><strong>Email:</strong> <span>marina@devteam.com</span></p>
          </div>
        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <div class="credits">
          BEST Mostar 2024
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll Top Button -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
