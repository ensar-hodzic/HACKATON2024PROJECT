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

    <title>MARINA AI - Login</title>
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
    <link rel="stylesheet" href="assets/css/login.css" />
  </head>

  <body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div
        class="container-fluid d-flex align-items-center justify-content-between mx-5"
      >
        <a
          href="index.php"
          id="bannerTag"
          class="d-flex align-items-center me-auto me-xl-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img
            src="assets/img/logoMarinaLong.png"
            alt=""
            class=""
            width="150" 
          />
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a class="navFont" href="index.php#hero" class="active">Home</a></li>
            <li><a class="navFont" href="index.php#about">O nama</a></li>
            <li><a class="navFont" href="index.php#services">Naše usluge</a></li>
            <li><a class="navFont" href="analizaeseja.php">Analiza eseja</a></li>
          </ul>

          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- End Nav Menu -->

        <!-- <a class="btn-getstarted" href="index.php#call-to-action"
          >Get Started</a
        > -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <section class="vh-100 bg-light register_main">
        <div class="container py-5 h-100 d-flex justify-content-center">
          <div class="col col-xl-6">
            <div class="card" style="border-radius: 1rem" data-aos="fade-up" data-aos-delay="15">
              <div class="row g-0">
                <div class="col-md-12 col-lg-12 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form action="assets/php/login.inc.php" method="post">
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <img src="assets/img/logos/swift-logos/swift-50.png" alt="">
                        <span class="h1 fw-bold mb-0">M A R I N A</span>
                      </div>
    
                      <h5 class="fw-normal mb-3 pb-3">Prijavite se na svoj račun</h5>
    
                      <div class="form-outline mb-4">
                        <input required type="text" id="form2Example17" class="form-control form-control-lg" name="username" />
                        <label class="form-label" for="form2Example17">Korisničko ime</label>
                      </div>
    
                      <div class="form-outline mb-4">
                        <input required type="password" id="form2Example27" class="form-control form-control-lg" name="pwd" />
                        <label class="form-label" for="form2Example27">Lozinka</label>
                      </div>
    
                      <div class="pt-1 mb-4">
                        <button class="btn btn-danger btn-lg btn-block" type="submit">Prijavi se</button>
                      </div>
    
                      <p class="mt-5" style="color: #393f81">Nemate račun?</p>
                      <a href="register.php" class="btn btn-outline-secondary mb-5 pb-lg-2">Registrujte se ovdje</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
