<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->title = 'Sign Up';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G50KJQ37M5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-G50KJQ37M5');
    </script>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title> Bantu </title>
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/soft-ui-dashboard.css" rel="stylesheet" />
    <link href="/css/site/style.css" rel="stylesheet">
  </head>
  <body class="">
    <main class="main-content  mt-0">
      <section>
        <div class="page-header min-vh-75">
          <div class="container" style="padding:0">
            <div class="row-login">
              <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card-body pt-4 p-3">
                  <div class="card-header pb-0 text-left bg-transparent">
                    <h3 class="font-weight-bolder" style="color: #000; font-family: Open Sans">Access global capital markets</h3>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">We are digital investment management platform. We offer investors access to globally diversified investment portfolios.</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">We solve the major pain point experienced by most investors of access to the best global capital markets.</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">Our platform uses advanced algorithms that assess investors’ attitudes and preferences</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">Monitor and manage all your investments through your customized dashboard.</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">Enjoy the exciting experience at a fraction of the cost of traditional advisors.</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card-body pt-4 p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">We are digital investment management platform. We offer investors access to globally diversified investment portfolios.</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">We solve the major pain point experienced by most investors of access to the best global capital markets.</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">Our platform uses advanced algorithms that assess investors’ attitudes and preferences</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">Monitor and manage all your investments through your customized dashboard.</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex align-items-center">
                        <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                          <i class="fas fa-check"></i>
                        </button>
                        <div class="d-flex flex-column">
                          <span class="mb-0">Enjoy the exciting experience at a fraction of the cost of traditional advisors.</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Product+Sans:300,400,600,700" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../js/soft-ui-dashboard.min.js?v=1.0.6"></script>
  </body>
</html>