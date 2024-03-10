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
    <style>
  @keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }

  navFont{
  font-size: 20px !important;
  }
}

/* Primjena animacije na svaki blok */
.service-box {
  opacity: 0; /* Početno stanje bloka je nevidljivo */
  animation: fadeIn 1s ease-in-out forwards; /* Koristimo forwards kako bi zadržali završno stanje animacije */
}

/* Podešavanje kašnjenja za svaki blok */
.service-box:nth-child(1) {
  animation-delay: 0.2s;
}
.service-box:nth-child(2) {
  animation-delay: 0.4s;
}
/* Poništi automatske margine */
.service-box h4,
.service-box p,
.service-box h5 {
  margin-top: 0;
}
    </style> 
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
      <!-- Service Details Section -->
<section id="service-details" class="service-details analizaeseja_main">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="5100">
        <div class="service-box">
          <h4>Vaša tema: </h4>
          <h5>"Jadi malog Vertera": Poredba sa Onjeginom</h5>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="5300">
        <div class="service-box">
          <h4>Vaš esej:</h4>
          <p>Verter i Onjegin su dva lika iz različitih knjiga koji imaju veoma sličan život. U obje knjige, glavni likovi napuštaju svoj život u potrazi za nekim novim avanturama, ali one se završavaju loše za njih. Oba djela napisana su u dobu romantizma i zato dijele mnogo sličnosti. 

            <br><br>Verter je bio mladi pjesnik i slikar koji se seli u Wahlheim. Tu upoznaje Lottu i odmah se zaljubi u nju. Međutim on zna da je njihova ljubav nemoguća jer je Lotta zaručena za Alberta. Njegova patnja ga tjera na samoubistvo. Onjeginov život prolazi slično. On je plemić koji odlazi iz Petersburga na selo. Tamo upoznaje Tatjanu. Njegova ljubavna avantura ga dovodi do depresije, koja ga sprječava da oženi ženu koja ga voli. Vraća se nazad u Petersburg nakon što je ubio najboljeg prijatelja. Nakon nekog vremena opet sretne Tatjanu, koja je sada udata za drugog. I radi toga Evgenije na kraju ostane sam i obeshraben životom pred njim. Ova djela su napisana u dobu romantizma i kroz likove vidimo pisce koje iskazuju svoja osjećanja i emocije, osobine koje prije nisu  mogli iskazati u dobu renesanse i baroka. Oba lika traže neku novu strast u životu kako ne bi proveli svoj život u dosadi i tu osjećamo kako pisci žele da se oslobode okova u kojima su prije živjeli. Verter se bavio slikarstvom i bio je u dodiru sa prirodom u kojoj je živio. Isto tako Onjegin se uklopio sa društvom u kojem je živio. Radi toga obojica postaju ravnodušni, nesretni. Osjećali su neku prazninu i čeznuli su za nečim novim i drugačijim. Međutim, oni nisu bili upoznati sa svim posljedicama koje mogu nastati od te čežnje za tim novim, te su obojica su završili usamljeni i depresivni, jer ih ljubav je surovo kaznila.  
            
            <br><br>Romantizam je pravac gdje je čovjek predstavljen kao emotivno i sentimentalno biće. Pisci predstavljaju tu čovjekovu želju za nečim novim, nepoznatim i neotkrivenim. Ali zbog toga, odbacivanjem racionalizma, pretjeruju u tragičnim sudbinama.  </p>
        </div>
      </div>
    </div> 
    <div class="row mt-4 align-items-start">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="5500">
        <div class="service-box">
          <h4>Savjeti i komentari <span style="color: #e84545;">MarineAI</span>:</h4>
          <p>
            U ovom eseju primijećene su sljedeće gramatičke i pravopisne greške:<br>
            <br>1. "koje imaju veoma sličan život" - treba "koji imaju vrlo sličan život".
            <br>2. "one se završavaju loše za njih" - treba "oni se završavaju loše za njih".
            <br>3. "oba djela napisana su u dobu romantizma" - treba "oba djela su napisana u dobu romantizma".
            <br>4. "Njegova ljubavna avantura ga dovodi do depresije, koja ga sprječava da oženi ženu koja ga voli." - treba "Njegova ljubavna avantura ga dovodi do depresije koja ga sprječava da oženi ženu koja ga voli."
            <br>5. "Onjeginov život prolazi slično" - treba "Onjeginov život prolazi slično."
            <br>6. "I radi toga" - treba "I zbog toga".
            <br>7. "radi toga Evgenije na kraju ostane sam" - treba "zbog toga je Evgenije na kraju ostao sam".
            <br>8. "kako ne bi proveli svoj život u dosadi i tu osjećamo kako pisci žele da se oslobode okova u kojima su prije živjeli" - treba "kako ne bi proveli svoj život u dosadi, i tu osjećamo kako pisci žele da se oslobode okova u kojima su prije živjeli".
            <br>9. "su završili usamljeni i depresivni, jer ih ljubav je surovo kaznila" - treba "su završili usamljeni i depresivni, jer ih je ljubav surovo kaznila".</p>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="5700">
        <div class="service-box">
          <h4>Finalna ocjena <span style="color: #e84545;">MarineAI</span>:</h4>
          <h1 style="font-size: 40pt; width:100%; text-align:center;">3</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Service-details Section -->
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
