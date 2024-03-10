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

  <body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div
        class="container-fluid d-flex align-items-center justify-content-between mx-5"
      >
        <a
          href="index.php"
          class="d-flex align-items-center me-auto me-xl-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/logoMarinaLong.png" alt="" class="" width="150">
          <!-- <h1>Append</h1>
          <span>.</span> -->
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
        <?php
            if(!isset($_SESSION["user_id"])) { ?>
            <nav id="navmenu" class="navmenu ml-5">
          <ul>
            <li><a class="navFont" href="index.php#hero" class="active">Home</a></li>
            <li><a class="navFont" href="index.php#about">O nama</a></li>
            <li><a class="navFont" href="index.php#services">Naše usluge</a></li>
            <li><a class="navFont" href="analizaeseja.php">Analiza eseja</a></li>

           
          </ul>

          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <?php } ?>
          <ul>
            <li><a class="navFont d-none" href=""></a></li>
            <li><a class="navFont d-none" href=""></a></li>
            <li><a class="navFont d-none" href=""></a></li>
            <li><a class="navFont d-none" href=""></a></li>

           
          </ul>

          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- End Nav Menu -->
        <?php
            if(!isset($_SESSION["user_id"])) { ?>
              <a class="btn-getstarted" href="index.php#call-to-action">Započni</a>
        <?php } ?>
        <?php
            if(isset($_SESSION["user_id"])) { ?>
            <form action="assets/php/logout.inc.php" method="post">
              <button type="submit" class="btn btn-danger mt-3 px-3">Odjavi se</button>
            </form>
        <?php } ?>
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- Hero Section - Home Page -->
      <section id="hero" class="hero">
        <img src="assets/img/rehaBG.jpg" alt="" data-aos="fade-in" />
        <!-- <div class="" style="background:url(../img/rehaBG.jpg"></div> -->

        <div class="container">
          <div class="row">
          <?php
            if(!isset($_SESSION["user_id"])) { ?>
              <div class="col-lg-10">
              <h2 data-aos="fade-up" data-aos-delay="100">
                Dobrodošli na MARINA AI
              </h2>
              <p data-aos="fade-up" data-aos-delay="200">
                MARINA AI: Umjetnost pisanja u digitalnoj eri.
              </p>
            </div>
            <div class="col-lg-5">
               <a href="login.php"><button type="button" class="btn btn-outline-danger mt-3 px-5" data-aos="fade-up" data-aos-delay="300">Prijavi se</button></a>
             </div>
        <?php } ?>
        <div class="col-lg-5">
        <?php
            if(isset($_SESSION["user_id"])) {
              outputUsername();
            } ?>
        </div>
            
          </div>
          <?php
            if(isset($_SESSION["user_id"])) { ?>
            <div class="col-lg-5">
              <a href="analizaeseja.php" class="btn btn-danger mt-3 px-5" data-aos="fade-up" data-aos-delay="300"">Nastavi dalje</a>
            </div>
        <?php } ?>
        </div>
      </section>
      <!-- End Hero Section -->

      <!-- Clients Section - Home Page -->
      
      <!-- End Clients Section -->

      <!-- About Section - Home Page -->
      <?php
            if(!isset($_SESSION["user_id"])) { ?>
           <section id="about" class="about">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row align-items-xl-center gy-5">
            <div class="col-xl-5 content">
              <h2>O nama</h2>
              <p class="me-5">
                Dobrodošli u Marina AI, vašeg partnera u izradi jasnih i efektivnih eseja.
                Marina AI je platforma koja vam pruža alate i podršku kako biste unaprijedili svoje esejsko pisanje.
                Naša misija je da vam pomognemo da poboljšate svoje tekstove, pružajući vam konstruktivne sugestije i jasne smjernice koje će vam pomoći da izrazite svoje ideje na najbolji mogući način.
              </p>
              <a href="#" class="read-more"
                ><span>Read More</span><i class="bi bi-arrow-right"></i
              ></a>
            </div>

            <div class="col-xl-7">
              <div class="row gy-4 icon-boxes">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-graph-up-arrow"></i>
                    <h3>Poboljšanje vještina pisanja</h3>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-person-video2"></i>
                    <h3>Povećanje samopouzdanja</h3>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-book"></i>
                    <h3>Individualizirano učenje</h3>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon-box">
                    <i class="bi bi-check-circle"></i>
                    <h3>Priprema za budućnost</h3>
                  </div>
                </div>
                <!-- End Icon Box -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Stats Section - Home Page -->
      
      <!-- End Stats Section -->

      <!-- Services Section - Home Page -->
      <section id="services" class="services">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Naše usluge</h2>
          <p>
            Marina AI se brine o sljedećim stavkama:
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0">
                  <i class="bi bi-search"></i>
                </div>
                <div>
                  <h4 class="title">
                    <a href="services-details.php" class="stretched-link"
                      >Inteligentna analiza teksta</a
                    >
                  </h4>
                  <p class="description">
                    Marina AI koristi napredne tehnologije obrade prirodnog jezika kako bi analizirala tekstove i pružila korisne sugestije za poboljšanje strukture, stila i gramatike.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0">
                  <i class="bi bi-person"></i>
                </div>
                <div>
                  <h4 class="title">
                    <a href="services-details.php" class="stretched-link"
                      >Personalizovane preporuke</a
                    >
                  </h4>
                  <p class="description">
                    Naša platforma pruža personalizovane sugestije koje se prilagođavaju vašem stilu pisanja i potrebama, pomažući vam da izrazite svoje ideje na jasan i efektivan način.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0">
                  <i class="bi bi-lightning-charge"></i>
                </div>
                <div>
                  <h4 class="title">
                    <a href="services-details.php" class="stretched-link"
                      >Brza i efikasna podrška</a
                    >
                  </h4>
                  <p class="description">
                    Marina AI vam omogućava brzu i efikasnu podršku, čineći proces prepravki i dobijanja sugestija jednostavnim i intuitivnim.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item d-flex">
                <div class="icon flex-shrink-0">
                  <i class="bi bi-lightbulb"></i>
                </div>
                <div>
                  <h4 class="title">
                    <a href="services-details.php" class="stretched-link"
                      >Autentičnost i individualnost</a
                    >
                  </h4>
                  <p class="description">
                    Cijenimo vašu autentičnost i individualnost u pisanju. Naš pristup prepravkama eseja podstiče vaš originalni glas dok istovremeno pomaže da postignete jasnoću i preciznost u svom izražavanju.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service Item -->

          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- Features Section - Home Page -->
      
      <!-- End Features Section -->

      <!-- Portfolio Section - Home Page -->
      
      <!-- End Portfolio Section -->
      <section id="call-to-action" class="call-to-action">
        <img src="assets/img/cta-bg.jpg" alt="" />

        <div class="container">
          <div
            class="row justify-content-center"
            data-aos="zoom-in"
            data-aos-delay="100"
          >
            <div class="col-xl-10">
              <div class="text-center">
                <h3>Želite li poboljšati sposobnost pisanja eseja?</h3>
                <a class="cta-btn" href="register.php">Registrujte se</a>
              </div>
            </div>
          </div>
        </div>
      </section>
        <?php } ?>
      

      <!-- Pricing Section - Home Page -->
      <!-- End Pricing Section -->

      
      <!-- End Faq Section -->
        </div>
      </section>
      <!-- End Recent-posts Section -->

      <!-- Contact Section - Home Page -->
      <!-- End Contact Section -->
    </main>

    <!-- ======= Footer ======= -->
      <?php
         if(!isset($_SESSION["user_id"])) { ?>
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
      <?php } ?>
    
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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
