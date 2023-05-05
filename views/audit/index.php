<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = 'Audit';

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>


<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Audit</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Audit</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..." onchange="search('/transactions/', this.value)">
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
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Audit</h6>
                </div>
		            <div class="col-lg-6 col-5 my-auto text-end">
		              <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer me-4" id="refresh" aria-expanded="false"  onclick="location.reload()">
                      <i class="fa fa-rotate-right text-secondary"></i>
                    </a>
		              </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <?php
		echo "<script language='JavaScript'> document.cookie=\"width=\" + screen.width;</script>";     
		echo GridView::widget([
                  'tableOptions' => [
                    'class' => 'table align-items-center mb-0',
                  ],
                  'dataProvider' => $dataProvider,
                  'filterModel' => $searchModel,
		              'layout' => '<div class="col-md-12">
		              </div><div class="card-header pb-0" style="padding: 15px;">{items}</div><div
		              class="card-header pb-0" style="padding-top: 10px;"><div class="table align-items-center text-dark text-sm font-weight-small mb-0">{pager}{summary}</div></div>',
                  'columns' => [
                      [
                        'attribute' => 'model',
                        'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
			'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2'],
			'visible' => !isset($_COOKIE['width']) || $_COOKIE['width'] >= 480
                      ],
                      [
                	'attribute' => 'action',
			'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
			'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2'],
			'visible' => !isset($_COOKIE['width']) || $_COOKIE['width'] >= 480
             	      ],		      
                      [
                        'attribute' => 'unique_id',
                        'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
		 	'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
                      ],
                      [
                      'attribute' => 'description',
                	  'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
                	  'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
                          
             	        ],
       			[
                          'attribute' => 'user.username',
                          'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
                          'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
			  'visible' => !isset($_COOKIE['width']) || $_COOKIE['width'] >= 480
                        ],
                        [
                            'label' => 'Date Created',
                            'headerOptions' => ['class' => 'text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'],
                            'contentOptions' => ['class' => 'text-dark text-sm font-weight-small mb-0'],
                            'value' => function ($model) {
                                $date = new DateTime();
                                $date->setTimezone(new DateTimeZone('Africa/Nairobi'));
                                $date->setTimestamp($model['created_at']/1000);
                                return $date->format(!isset($_COOKIE['width']) || $_COOKIE['width'] >= 480 ? 'd M Y g:i a' : 'd M');
                             }
                          ],
                 
        
              ],
      	     ]); ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
   
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
  <script src="../js/search.js"></script>

</body>

</html>







