<?php
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

  <title>Bantu - Simpler | Smarter | Investing</title>

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



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->

  <link href="/css/site/style.css" rel="stylesheet">


</head>



<body>



  <!-- ======= Header ======= -->

  <header id="header" class="header fixed-top">

    <div class="container-fluid container-xl container-login d-flex align-items-center justify-content-between">



    <div class="sidenav-header">

      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

      <img style="width: 160px; height: 58px;" src="/img/imageedit_2_5725811381.png" alt="">
    </div>



      <nav id="navbar" class="navbar">

        <ul>

          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

          <li><a class="nav-link scrollto" href="#about">About</a></li>


          <li><a class="nav-link scrollto" href="https://blog.investbantu.com">Blog</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

	        <li><a class="getstarted ms-4" href="/dashboard/index">
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

      <div class="row ms-2">

        <div class="col-lg-6 d-flex flex-column justify-content-center">

        <h1 style="text-align: left; color: #2ec6e7;">Invest. <br> Simpler. <br> Smarter. </h1>
          <p style="color:#888;">
            <b>Invest in a globally diversified portfolio based on your return objectives and risk tolerance</b>
          </p>
          <div data-aos="fade-up" data-aos-delay="600">

            <div class="text-center text-lg-start">

              <a href="/site/register" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">

                <span>Get Started</span>

                <i class="bi bi-arrow-right"></i>

              </a>

            </div>

          </div>

        </div>

        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">

          <img src="/img/img/hero-img.svg" class="img-fluid" alt="">

        </div>

      </div>

    </div>



  </section><!-- End Hero -->




    <!-- ======= Services Section ======= -->

    <section id="services" class="services">



      <div class="container" data-aos="fade-up">



        <div class="row gy-4">



          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

            <div class="service-box blue">

              <i class="ri-discuss-line icon"></i>

              <h3>Access global capital markets</h3>

              <!-- <p>Earn 6% minimum commission on airtime across all networks.</p> -->

              <a href="/site/register" class="read-more"><span>Open Account</span> <i class="bi bi-arrow-right"></i></a>

            </div>

          </div>



          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">

            <div class="service-box orange">

              <i class="ri-discuss-line icon"></i>

              <h3>Grow your wealth with InvestBantu</h3>


              <a href="/site/register" class="read-more"><span>Start Here</span> <i class="bi bi-arrow-right"></i></a>

            </div>

          </div>



          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">

            <div class="service-box green">

              <i class="ri-discuss-line icon"></i>

              <h3>Meet your most important life goals</h3>


              <a href="/site/register" class="read-more"><span>Register Now</span> <i class="bi bi-arrow-right"></i></a>

            </div>

          </div>

        </div>



      </div>



    </section><!-- End Services Section -->


    

  <main id="main">

    <!-- ======= About Section ======= -->

    <section id="about" class="about">



      <div class="container" data-aos="fade-up">

        <div class="row gx-0">



          <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <div class="content">

              <h3>Who We Are</h3>

              <h2>Digital investment platform </h2>

                <p> We are digital investment management platform. We offer investors access to globally diversified investment portfolios. </p>
                <h2>Advanced algorithms</h2>
                <p>Our platform uses advanced algorithms that assess investors’ attitudes and preferences towards investment risks and carefully matches them with suitable investment portfolios using Nobel-Prize-winning strategies. </p>
                <h2>Problem solving</h2>
                <p> We solve the major pain point experienced by most investors of access to the best global capital markets and successful management of portfolios to generate sufficient returns to meet their investment goals. </p>

              <div class="text-center text-lg-start">

                <a href="https://investbantu.com" target="bank" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">

                  <span>Read More</span>

                  <i class="bi bi-arrow-right"></i>

                </a>

              </div>

            </div>

          </div>

        </div>

      </div>



    </section><!-- End About Section -->



    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">



      <div class="container" data-aos="fade-up">



        <header class="section-header">

          <h2>Contact</h2>

          <p>Contact Us</p>

        </header>



        <div class="row gy-4">



          <div class="col-lg-6">



            <div class="row gy-4">

              <div class="col-md-6">

                <div class="info-box">

                  <i class="bi bi-geo-alt"></i>

                  <h3>Address</h3>

                  <p>Princeton,<br>New Jersey, United States</p>

                </div>

              </div>

              <div class="col-md-6">

                <div class="info-box">

                  <i class="bi bi-telephone"></i>

                  <h3>Call Us</h3>

                  <p>+1-888-499-6903</p>

                </div>

              </div>

              <div class="col-md-6">

                <div class="info-box">

                  <i class="bi bi-envelope"></i>

                  <h3>Email Us</h3>

                  <p>info@investbantu.com</p>

                </div>

              </div>

              <div class="col-md-6">

                <div class="info-box">

                  <i class="bi bi-clock"></i>

                  <h3>Open Hours</h3>

                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>

                </div>

              </div>

            </div>



          </div>



          <div class="col-lg-6">

            <form action="forms/contact.php" method="post" class="php-email-form">

              <div class="row gy-4">



                <div class="col-md-6">

                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>

                </div>



                <div class="col-md-6 ">

                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>

                </div>



                <div class="col-md-12">

                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>

                </div>



                <div class="col-md-12">

                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>

                </div>



                <div class="col-md-12 text-center">

                  <div class="loading">Loading</div>

                  <div class="error-message"></div>

                  <div class="sent-message">Your message has been sent. Thank you!</div>



                  <button type="submit">Send Message</button>

                </div>



              </div>

            </form>



          </div>



        </div>



      </div>



    </section><!-- End Contact Section -->



  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>

  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Product+Sans:300,400,600,700" rel="stylesheet">

  <!-- Vendor JS Files -->

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/vendor/php-email-form/validate.js"></script>



  <!-- Template Main JS File -->

  <script src="/js/main.js"></script>

</body>



</html>


