<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
$this->title = 'Buy Stock';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Product+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
              </li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Stock</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Buy</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <span class="input-group-text text-body">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
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
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
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
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="row mt-4">
          <div class="col-lg-8">
            <div class="card z-index-2">
              <div class="card-header pb-0">
                <h4>
                  <b> <?= $stock->price ?> </b>
                  <small>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-up text-success"></i><?= $stock->percentage ?> +5.65 5D </small>
                </h4>
                <div class="text-center">
                  <button id="week" class="badge bg-gradient-secondary" style="float: right;border-color: transparent;">1W</button>
                </div>
                <div class="text-center">
                  <button id="day" class="badge bg-gradient-secondary" style="float: right;border-color: transparent;margin-right:2px;">1D </button>
                </div>
                <div class="text-center">
                  <button id="hour" class="badge bg-gradient-secondary" style="float: right;border-color: transparent;margin-right:2px;">1H</button>
                </div>
                <div class="text-center">
                  <button id="quater" class="badge bg-gradient-secondary" style="float: right;border-color: transparent;margin-right:2px;">15min</button>
                </div>
                <p class="text-sm">
                  <!-- <i class="fa fa-arrow-up text-success"></i> -->
                  <span class="font-weight-bold">Closed: May 2, 7:59:55 PM UTC-4 · USD · NASDAQ · </span> Disclaimer
                </p>
              </div>
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <div class="card z-index-2">
              <div class="card-body p-3">
                <div class="text-center">
                  <button id="buy" class="badge bg-gradient-secondary" style="float: left; border-color: transparent;">Buy Stock</button>
                </div>
                <div class="text-center">
                  <button id="sell" class="badge bg-gradient-secondary" style="float: right;border-color: transparent;">Sell Stock</button>
                </div>
                <div class="border-radius-lg py-3 pe-1 mb-3">
                  <div class="card-body">
                    <!-- <form role="form"><label>Email</label><div class="mb-3"><input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon"></div><label>Password</label><div class="mb-3"><input type="email" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon"></div><div class="text-center"><button type="button" class="btn bg-gradient-success w-100 mt-4 mb-0">Buy</button></div></form> -->
                    <div id="buy-content">
                      <h5>Buy Stock</h5>
                      <form role="form">
                        <label>Price</label>
                        <div class="mb-3">
                        <?= $stock->price ?>
                          <!-- <input type="number" class="form-control" placeholder="Price" aria-label="number" aria-describedby="price-addon"> -->
                        </div>
                        <label>Quantity</label>
                        <div class="mb-3">
                          <input type="number" class="form-control" placeholder="Quantity" aria-label="number" aria-describedby="quantity-addon">
                        </div>
                        <div class="text-center">
                          <button type="button" class="btn bg-gradient-primary w-100 mt-4 mb-0">Buy</button>
                        </div>
                      </form>
                    </div>
                    <div id="sell-content" style="display: none;">
                      <h5>Sell Stock</h5>
                      <form role="form">
                        <label>Price</label>
                        <div class="mb-3">
                          <input type="number" class="form-control" placeholder="Price" aria-label="number" aria-describedby="price-addon">
                        </div>
                        <label>Quantity</label>
                        <div class="mb-3">
                          <input type="number" class="form-control" placeholder="Quantity" aria-label="number" aria-describedby="quantity-addon">
                        </div>
                        <div class="text-center">
                          <button type="button" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sell</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--   Core JS Files   -->
    <script>
      const buyButton = document.getElementById('buy');
      const sellButton = document.getElementById('sell');
      const buyContent = document.getElementById('buy-content');
      const sellContent = document.getElementById('sell-content');
      const quantityInput = document.getElementById('quantity');
      const priceInput = document.getElementById('price');
      const buyQuantitySpan = document.getElementById('buy-quantity');
      const buyPriceSpan = document.getElementById('buy-price');
      const sellQuantitySpan = document.getElementById('sell-quantity');
      const sellPriceSpan = document.getElementById('sell-price');
      buyButton.addEventListener('click', () => {
        buyContent.style.display = 'block';
        sellContent.style.display = 'none';
        buyQuantitySpan.textContent = quantityInput.value;
        buyPriceSpan.textContent = priceInput.value;
      });
      sellButton.addEventListener('click', () => {
        sellContent.style.display = 'block';
        buyContent.style.display = 'none';
        sellQuantitySpan.textContent = quantityInput.value;
        sellPriceSpan.textContent = priceInput.value;
      });
    </script>
    <script src="../js/plugins/chartjs.min.js"></script>
    <script>
      const ctx2 = document.getElementById("chart-line").getContext("2d");
      const gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
      gradientStroke1.addColorStop(1, 'rgba(187, 236, 247,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(187, 236, 247,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(187, 236, 247,0)'); //purple colors
      const gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Volume",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#2ec6e7",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
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
  </body>
</html>


