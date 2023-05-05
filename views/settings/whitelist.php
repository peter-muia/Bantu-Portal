<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
$this->title = 'Whitelist';

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>


<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Settings</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Whitelist</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            
          <li class="nav-item d-xl-none d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">Welcome to</span> Bantu
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="/site/profile" class="nav-link text-body">
                <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navigation Bar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <br>
            <br>
            <br>
            <center>
	     <div class="col-9">
              <p>To restrict api calls, please enter your comma delimited IP Addresses e.g. (0.0.0.0, 1.1.1.1, 2.2.2.2)</p></div>
              <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="#">
	          <div class="card-body p-4">
                   <?php if($model['response'] == 'Pending') :?>
                    <?php $form = ActiveForm::begin(['action' => '../settings/whitelist']); ?>
                    <div class="row">
                        <?= $form->field($model, 'pin')->passwordInput(['placeHolder'=>'Enter Pin', 'style' => 'border: 0.1px solid; border-color: #ddd; border-radius: 4px; padding: 24px;'])->label(false) ?>
                      <div class="form-group">
                         <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-button btn-block text-uppercase']) ?>
                      </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                   <?php elseif($model["response"]) :?>
                   <div>
                        <b><?php echo $model["response"]; ?> </b>
                   </div>
                    <?php else :?>
                    <?php $form = ActiveForm::begin(['action' => '../settings/whitelist']); ?>
                    <div class="row">
			<?= $form->field($model, 'whitelist')->textInput(['placeHolder' => 'Enter IP Addresses', 'value' => $whitelist, 'autocomplete' => 'off', 'style' => 'border: 0.1px solid; border-color: #ddd; border-radius: 4px; padding: 24px;'])->label(false) ?>
		        <?= $form->field($model, 'response')->textInput(['value' => '', 'autocomplete' => 'off', 'style' => 'width: 0; height: 0; padding: 0; margin-top: -2rem;'])->label(false) ?>
                        <?= $form->field($model, 'password')->passwordInput(['placeHolder' => 'Enter Password', 'autocomplete' => 'off', 'style' => 'border: 0.1px solid; border-color: #ddd; border-radius: 4px; padding: 24px;'])->label(false) ?>
                      <div class="form-group">
                         <?= Html::submitButton('Proceed', ['class' => 'btn btn-primary btn-button btn-block text-uppercase']) ?>
                      </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
      
    
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Preferences</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Navigation Type -->
        <div class="mt-3">
          <h6 class="mb-0">Navigation Type</h6>
          <p class="text-sm">Choose between 2 different navigation types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the navigation type just on desktop view.</p>
        <!-- Navigation Bar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navigation Bar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="/doc/index">View documentation</a>
        <div class="w-100 text-center">
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/Bantu" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://facebook.com/Bantu" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  
  <script src="../js/plugins/chartjs.min.js"></script>


</body>

</html>






