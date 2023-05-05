<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->title = 'Verify Phone Number';

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
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G50KJQ37M5');
  </script>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  Bantu
  </title>
  <!-- CSS Files -->
  <link id="pagestyle" href="/css/soft-ui-dashboard.css" rel="stylesheet" />
  <link href="/css/site/style.css" rel="stylesheet">
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-login navbar-plain navbar-expand-lg top-0 z-index-3 position-absolute start-0 end-0">
          <div class="container-fluid container-login pe-0">
            <div class="sidenav-header">
                <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                <img style="width: 160px; height: 58px;" src="/img/imageedit_2_5725811381.png" alt=""> 
            </div>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
	    <div class="collapse navbar-collapse" id="navigation">
	      <div class="navbar-nav mx-auto ms-xl-auto me-xl-7">
	      <li class="navbar-item d-flex me-3">
                <a class="nav-login scrollto" href="/">Home</a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a class="getstarted signup scrolto" href="/site/register">Sign Up</a>
	      </li>
	      </div>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container"style="padding:0">
          <div class="row-login">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-0">
                <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder" style="color: #000; font-family: Open Sans">Please provide the token sent by SMS</h3>
                </div>
                <div class="card-body">
                <?php $form = ActiveForm::begin([
                        'id' => 'login-form'
                    ]); ?>
                    <?= $form->field($model, 'token')->textInput(['autofocus' => true]) ?>
                    <div class="form-group">
                        <div class="">
                            <?= Html::submitButton('Verify Me', ['class' => 'btn btn-primary w-100 mt-4 mb-0', 'name' => 'verify-user-button']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
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
