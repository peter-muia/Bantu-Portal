<?php 
  @session_start();
?>
<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = 'Dashboard';



?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-md ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
  	    <div class="input-group">
	      <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
	      <input type="text" onchange="search('/transactions/', this.value)" class="form-control" placeholder="Type here...">
	    </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li>
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group" style="margin-left: 6px">
              <input type="text" class="form-control" name="daterange" style="min-width: 80px;">
            </div>
          </div>
            </li>
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
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
            <li class="nav-item d-flex align-items-center">
            </li>
            <li class="nav-item dropdown d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Account Value</p>
                    <h5 class="font-weight-bolder mb-0">
			<?php echo $volume; ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-light text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Net profit</p>
                    <h5 class="font-weight-bolder mb-0">
			<?php echo $customers; ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-light text-center border-radius-md">
                    <i class="ni ni-tag text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Earnings</p>
                    <h5 class="font-weight-bolder mb-0">
			<?php echo $commission; ?>
                    </h5>
                  </div>
                </div>
               <div class="col-4 text-end">
                  <div class="icon icon-shape bg-light text-center border-radius-md">
                    <i class="ni ni-chart-bar-32 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <?php
                      echo '<p class="text-sm mb-0 text-capitalize font-weight-bold">Available funds</p>' . "<h5 class='font-weight-bolder mb-0'> " . $balance .
                      "</h5>"
                    ?>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-light text-center border-radius-md">
                    <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">To the moon!</p>
                    <h5 class="font-weight-bolder">Meet your important life goals</h5>
                    <p class="mb-5">Invest in a globally diversified portfolio based on your return objectives and risk tolerance.</p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" target="_blank" href="https://investbantu.com">
                      Read More
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary border-radius-md h-100">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="../img/illustrations/rocket-blue.png" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card h-100 p-3">
	    <div class="overflow-hidden position-relative border-radius-md bg-cover h-100" style="background-color: #0e234c; 
		background-position: center; min-height: 180px">
	      <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
		<h5 class="text-white">Account Summary
    <span class="float-lg-end pe-4">
	      <a href="profile" class="ni <?php echo !isset($role) ? '' : $role == 'customer' ? 'ni-notification-70 text-danger' : '' ?> text-gradient"></a>
      </span>
    </h5>
    
               
		<small class="text-white"><?php echo \Yii::$app->user->identity->email ?></small>
		<small class="text-white"><?php echo \Yii::$app->user->identity->investment_type ?></small>

      


		<a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="/site/profile">
			View Account
			<i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
		</a>
	     </div>
	   </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
          <div class="card z-index-2">
            <div class="card-body p-3">
              <div class="bg-white border-radius-md py-3 pe-1 mb-3">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <h6 class="ms-2 mt-4 mb-0"> Risk Return </h6>
	            <p class="text-sm ms-2"> (<span class="font-weight-bolder"><?php echo $float_growth; ?></span>) than last month </p>
              <div class="container border-radius-md">
                <div class="row">
                  <div class="col-4 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>document</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(154.000000, 300.000000)">
                                  <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                  <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Conservative</p>
                    </div>
		                <h5 class="font-weight-bolder"><?php echo $customers_growth; ?></h5>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-<?php echo ((int)(str_replace('%', '', $customers_growth)))/10 ?>0" role="progressbar" aria-valuenow="<?php echo str_replace('%', '', $customers_growth); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-4 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>spaceship</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(4.000000, 301.000000)">
                                  <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                  <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                  <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                  <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Balanced</p>
                    </div>
		                <h5 class="font-weight-bolder"><?php echo $transactions_growth; ?></h5>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-<?php echo ((int)(str_replace('%', '', $transactions_growth)))/10 ?>0" role="progressbar" aria-valuenow="<?php echo str_replace('%', '', $transactions_growth); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-4 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Progressive</p>
                    </div>
		                <h5 class="font-weight-bolder"><?php echo $revenue_growth; ?></h5>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-<?php echo ((int)(str_replace('%', '', $revenue_growth)))/10 ?>0" role="progressbar" aria-valuenow="<?php echo str_replace('%', '', $revenue_growth); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Portfolio Overview</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success"></i>
		            <span class="font-weight-bold"><?php echo $volume_growth; ?></span>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="292"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Account Statement</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
		                  <span class="font-weight-bold ms-1"><?php echo $success; ?> Success</span>
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li>
			                  <a class="dropdown-item border-radius-md">
			                  <?= Html::a(Yii::t('app', 'Export'), Url::current(['export']), ['data-method' => 'POST', 'data-params' => ['data' => $data]]) ?>
			                  </a>
		                  </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
              <div class="customer-index">
		            <?php
		            echo "<script language='JavaScript'> document.cookie=\"width=\" + screen.width;</script>";     
		            echo GridView::widget([
                  'tableOptions' => [
                    'class' => 'table align-items-center mb-0',
                  ],
                  'dataProvider' => $dataProvider,
		              'layout' => '<div class="col-md-12">
		              {pager}</div><div class="card-header pb-0" style="padding: 15px;">{items}</div><div
		              class="card-header pb-0" style="padding-top: 10px;"><div class="table align-items-center text-dark text-sm font-weight-small mb-0">{pager}{summary}</div></div>',
                  'columns' => [
                      [
              		'label' => 'Investment ID',
                	'attribute' => 'trxId',
			            'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
			            'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2'],
			            'visible' => !isset($_COOKIE['width']) || $_COOKIE['width'] >= 480
             	      ],		      
                      [
                        'attribute' => 'name',
                        'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
		 	                  'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
                      ],
                      [
                        'label' => 'Amount',
                        'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
                        'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
                        'value' => function ($model) {
                	      return $model['currency'].' '.$model['amount'];
                         }
             	      ],
                      [
                        'attribute' => 'response',
                        'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
			                'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
			                'visible' => !isset($_COOKIE['width']) || $_COOKIE['width'] >= 480
                      ],
                      [
                        'label' => 'Date',
                        'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
                        'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
                        'value' => function ($model) {
                            $date = new DateTime();
                            $date->setTimezone(new DateTimeZone('Africa/Nairobi'));
                            $date->setTimestamp($model['createTime']/1000);
                            return $date->format(!isset($_COOKIE['width']) || $_COOKIE['width'] >= 480 ? 'd M g:i a' : 'd M');
                         }
                      ],
                      [
                      'class' => 'yii\grid\ActionColumn',
		                  'template' => '{view}',
                      'buttons' => [
                      'view' => function ($url, $model) {
                             return Html::a(
                               '<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:1.125em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M573 241C518 136 411 64 288 64S58 136 3 241a32 32 0 000 30c55 105 162 177 285 177s230-72 285-177a32 32 0 000-30zM288 400a144 144 0 11144-144 144 144 0 01-144 144zm0-240a95 95 0 00-25 4 48 48 0 01-67 67 96 96 0 1092-71z"></path></svg>',
                               Url::to(['transactions/view', 'tid' => $model['trxId'], 'pid' => $model['id']]),
                               [
                                 'title' => Yii::t('app', 'Manage'),
                                 'class' => ''
                               ]
                            );
	                        },
	                      ]
                      ],
                    ],
      	          ]);
	              ?> 
               </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Top Stocks</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
		            <span class="font-weight-bold"><?php echo $pending; ?></span> Purchasing
	            </p>
            </div>
	          <div class="card-body p-3">
              <div class="timeline-one-side">
                <div class="timeline-block mb-3">
                  <a href="/stock/view?id=1">
                    <div class="#">
                      <h6 class="badge badge-sm bg-gradient-success"><?php foreach ($badge1 as $badge1): ?> <?= $badge1->badge ?> <?php endforeach; ?></h6>
                      <span class="badge badge-sm bg-gradient-secondary" style="float: right;color:#666;">
                        <i class="fa fa-arrow-up"></i> <?php foreach ($percentage1 as $percentage1): ?> <?= $percentage1->percentage ?> <?php endforeach; ?> </span>
                      <h6 class="text-dark text-sm font-weight-bold mb-0"> <?php foreach ($name1 as $name1): ?> <?= $name1->name ?> <?php endforeach; ?> </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"> <?php foreach ($following1 as $following1): ?> <?= $following1->following ?> <?php endforeach; ?> </p>
                    </div>
                  </a>
                </div>
                <div class="timeline-block mb-3">
                  <a href="/stock/view?id=2">
                    <div class="#">
                    
                      <h6 class="badge badge-sm bg-gradient-danger"><?php foreach ($badge2 as $badge2): ?> <?= $badge2->badge ?> <?php endforeach; ?></h6>
                      <span class="badge badge-sm bg-gradient-secondary" style="float: right;color:#666;">
                        <i class="fa fa-arrow-down"></i> <?php foreach ($percentage2 as $percentage2): ?> <?= $percentage2->percentage ?> <?php endforeach; ?> </span>
                      <h6 class="text-dark text-sm font-weight-bold mb-0"> <?php foreach ($name2 as $name2): ?> <?= $name2->name ?> <?php endforeach; ?> </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"> <?php foreach ($following2 as $following2): ?> <?= $following2->following ?> <?php endforeach; ?> </p>
                    </div>
                  </a>
                </div>
                <div class="timeline-block mb-3">
                  <a href="/stock/view?id=3">
                    <div class="#">
                      <h6 class="badge badge-sm bg-gradient-success"><?php foreach ($badge3 as $badge3): ?> <?= $badge3->badge ?> <?php endforeach; ?></h6>
                      <span class="badge badge-sm bg-gradient-secondary" style="float: right;color:#666;">
                        <i class="fa fa-arrow-up"></i> <?php foreach ($percentage3 as $percentage3): ?> <?= $percentage3->percentage ?> <?php endforeach; ?> </span>
                      <h6 class="text-dark text-sm font-weight-bold mb-0"> <?php foreach ($name3 as $name3): ?> <?= $name3->name ?> <?php endforeach; ?> </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"> <?php foreach ($following3 as $following3): ?> <?= $following3->following ?> <?php endforeach; ?> </p>
                    </div>
                  </a>
                </div>
                <div class="timeline-block mb-3">
                  <a href="/stock/view?id=4">
                    <div class="#">
                      <h6 class="badge badge-sm bg-gradient-success"><?php foreach ($badge4 as $badge4): ?> <?= $badge4->badge ?> <?php endforeach; ?></h6>
                      <span class="badge badge-sm bg-gradient-secondary" style="float: right;color:#666;">
                        <i class="fa fa-arrow-up"></i> <?php foreach ($percentage4 as $percentage4): ?> <?= $percentage4->percentage ?> <?php endforeach; ?> </span>
                      <h6 class="text-dark text-sm font-weight-bold mb-0"> <?php foreach ($name4 as $name4): ?> <?= $name4->name ?> <?php endforeach; ?> </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"> <?php foreach ($following4 as $following4): ?> <?= $following4->following ?> <?php endforeach; ?> </p>
                    </div>
                  </a>
                </div>
                <div class="timeline-block mb-3">
                  <a href="/stock/view?id=5">
                    <div class="#">
                      <h6 class="badge badge-sm bg-gradient-success"><?php foreach ($badge5 as $badge5): ?> <?= $badge5->badge ?> <?php endforeach; ?></h6>
                      <span class="badge badge-sm bg-gradient-secondary" style="float: right;color:#666;">
                        <i class="fa fa-arrow-up"></i> <?php foreach ($percentage5 as $percentage5): ?> <?= $percentage5->percentage ?> <?php endforeach; ?> </span>
                      <h6 class="text-dark text-sm font-weight-bold mb-0"> <?php foreach ($name5 as $name5): ?> <?= $name5->name ?> <?php endforeach; ?> </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"> <?php foreach ($following5 as $following5): ?> <?= $following5->following ?> <?php endforeach; ?> </p>
                    </div>
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>

     <footer class="footer pt-3  ">
    <div class="container-fluid">
     <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
	          <div class="text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              <a class="font-weight-bold" target="_blank">Bantu</a>
            </div>
          </li>
         </ul>
        </div>
       </div>
      </div>
     </footer> 
    </div>
  </main>
  
  <!--   Core JS Files   -->
  
<script>
const getCookieValue = (name) => (
  document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || ''
);
$(function() {
	$('input[name="daterange"]').daterangepicker({
	  ranges: {
		'Today': [moment(), moment()],
		'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
		'Last 7 Days': [moment().subtract(6, 'days'), moment()],
		'Last 30 Days': [moment().subtract(29, 'days'), moment()],
		'This Month': [moment().startOf('month'), moment().endOf('month')],
		'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	  },
	  "alwaysShowCalendars": true,
	  "startDate": getCookieValue('start') === "" ? moment().subtract(6, 'days') : moment(Number(getCookieValue('start'))),
	  "endDate": getCookieValue('end') === "" ? moment() : moment(Number(getCookieValue('end'))),
	  locale: {
		format: 'MMM DD'
	  }
	}, function(start, end, label) {
		console.log('New date range selected: ' + start.valueOf() + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
		document.cookie = 'start=' + start.valueOf() + '; path=/';
		document.cookie = 'end=' + end.valueOf() + '; path=/';
		location.reload();
	});
});
</script>

  <script src="../js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

   var data = <?php echo $chart; ?>;
   var labels = [];
   var floats = [];
   var revenues = [];
   var volumes = [];

   for(var i in data.labels) labels.push(data.labels[i]);
   for(var i in data.floats) floats.push(data.floats[i]);
   for(var i in data.revenues) revenues.push(data.revenues[i]);
   for(var i in data.volumes) volumes.push(data.volumes[i]);

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: labels,
        datasets: [{
          label: "Float",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#2e2e77",
          data: floats,
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#b2b9bf"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(131, 131, 201,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(131, 131, 201,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(131, 131, 201,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(254, 193, 7,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(254, 193, 7,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(254, 193, 7,0)'); //purple colors
    
    new Chart(ctx2, {
      type: "line",
      data: {
        labels: labels,
        datasets: [{
            label: "Volume",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#2e2e77",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: volumes,
            maxBarThickness: 6

          },
          {
            label: "Commission",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#fec107",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: revenues,
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="../js/search.js"></script>

</body>

</html>