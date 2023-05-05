<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = "Compliance";

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link href="https://fonts.googleapis.com/css?family=Product+Sans:300,400,600,700" rel="stylesheet" />
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
</head>


<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Compliance</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Requirements</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
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
                        <h6 class="text-monospace font-weight-normal mb-1">
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
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <h6>Compliance Documents</h6>
                  <section>
                    <div class="page-header min-vh-35">
                      <div class="container" style="padding:0">
                        <div class="row-login">
                          <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card-body pt-4 p-3">
                              <ul class="list-group">
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                      <span class="mb-0">Policies and Procedures</span>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                      <span class="mb-0">Code of Ethics.</span>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                      <span class="mb-0">Form ADV</span>
                                    </div>
                                  </div>
                                </li>
				<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                        <span class="mb-0">Professional Indemnity</span>
                                    </div>
                                  </div>
                                </li>
				<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                      <span class="mb-0">Sample Investment Management Agreement</span>
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
                                      <span class="mb-0">Sample Custody Agreement</span>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                      <span class="mb-0">Sample Broker Agreement</span>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                        <span class="mb-0">Sample Power of Attorney</span>
                                    </div>
                                  </div>
                                </li>
				<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                      <i class="fas fa-check"></i>
                                    </button>
                                    <div class="d-flex flex-column">
                                        <span class="mb-0">Sample Standing Letter of Authorization</span>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
  
  <!--   Core JS Files   -->
  
  <script src="../js/plugins/chartjs.min.js"></script>
</body>
</html>
