


<?php
use yii\helpers\Html;
use app\components\Api;
use yii\grid\GridView;
?>
<main class="main-content mt-1 border-radius-lg">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm">
            <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
          </li>
          <li class="breadcrumb-item text-sm text-dark" aria-current="page">API</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">API</h6>
      </nav>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav  justify-content-end">
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="#">
                    <i class="material-icons">campaign</i>
                    </a>
                    
                </li>
          <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a href onClick="window.location.href=window.location.href">
              <i class="material-icons">refresh</i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block"> Account </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
              <a class="dropdown-item" href="/site/profile">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="
								<?=\yii\helpers\Url::to(["/site/logout", ]) ?>">Log out </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
    
          
          
  <div class="col-xl-12 col-sm-6">
  <div class="card">
    <div class="card-body p-3">
      <div class="row">
        <div class="col-8">
          <div class="numbers">
    
			<?=
				GridView::widget([
            'tableOptions' => [
              'class' => 'table table-striped table-no-bordered table-hover',
            ],
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            
                [
                    'attribute' => 'account',
                    'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                    'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                  [
                      'attribute' => 'trxId',
                      'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                      'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                  [
                    'attribute' => 'merchant',
                    'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                    'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                  [
                    'attribute' => 'amount',
                    'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                    'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                  [
                    'attribute' => 'commission',
                    'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                    'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                  [
                    'attribute' => 'mode',
                    'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                    'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                  [
                    'attribute' => 'createTime',
                    'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                    'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                  [
                    'attribute' => 'updateTime',
                    'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                    'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
		   [
                      'attribute' => 'response',
                      'contentOptions' => ['class' => 'text-xs mb-0 me-15'],
                      'headerOptions' => ['class' => 'text-uppercase text-xxs font-weight-bolder opacity-7 ps-2']
                  ],
                
              
                ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
                ],
              
            ],
        ]);
			 ?>    
            
                 

                 

          </div>
        </div>
        <div class="col-4 text-end">
          <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


        


</main>
<!--   Core JS Files   -->
<script src="/js/core/popper.min.js"></script>
<script src="/js/core/bootstrap.min.js"></script>
<script src="/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/js/plugins/chartjs.min.js"></script>
<script src="/js/plugins/Chart.extension.js"></script>


