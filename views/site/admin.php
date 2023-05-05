<?php
use Yii;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bantu</title>

  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-G50KJQ37M5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G50KJQ37M5');
  </script>

  <!-- Favicons -->

  <!-- <link href="/img/img/favicon.png" rel="icon">

  <link href="/img/img/apple-touch-icon.png" rel="apple-touch-icon"> -->



  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Product+Sans:300,400,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="/css/site/style.css" rel="stylesheet">

</head>



<body>



  <!-- ======= Header ======= -->

  <header id="header" class="header fixed-top">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">



    <div class="sidenav-header">

      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

      <img style="width: 160px; height: 58px;" src="/img/imageedit_2_5725811381.png" alt="">
    </div>



      <nav id="navbar" class="navbar">

        <ul>

          <li><a class="nav-link scrollto" href="/">Home</a></li>


	        <li><a class="getstarted scrollto" href="/dashboard/index">
            <?php echo isset(\Yii::$app->user->identity->uuid) ? "Dashboard" : "Login" ?></a>
          </li>

        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->



    </div>

  </header>

  <!-- End Header -->



  <!-- ======= Hero Section ======= -->

  <section id="hero" class="hero d-flex align-items-center">



    <div class="container">

      <div class="row">

        <div class="col-lg-6 d-flex flex-column justify-content-center">

          <h1 data-aos="fade-up">Hello   <?= Yii::$app->user->identity->firstname ?>!<br>
              
            </h1>

          <h4 data-aos="fade-up" data-aos-delay="400"><br/>Kindly note that this service is reserved for the admin</h4>

          <div data-aos="fade-up" data-aos-delay="600">

            <div class="text-center text-lg-start">

              <a href="mailto:hello@investbantu.com" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">

                <span>Contact Us</span>

                <i class="bi bi-arrow-right"></i>

              </a>

            </div>

          </div>

        </div>

        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200" style="padding: 50px">

          <img src="../img/img/admin.png" class="img-fluid" alt="">

        </div>

      </div>

    </div>



  </section><!-- End Hero -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->

  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <script src="../assets/vendor/aos/aos.js"></script>

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="../assets/vendor/php-email-form/validate.js"></script>



  <!-- Template Main JS File -->

  <script src="/js/main.js"></script>



</body>



</html>


