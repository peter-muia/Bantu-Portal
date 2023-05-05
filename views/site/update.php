<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;
use yii2tech\csvgrid\CsvGrid;
use yii\data\ArrayDataProvider;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use borales\extensions\phoneInput\PhoneInput;

$this->title = \Yii::$app->user->identity->firstname;

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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Site</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">User</h6>
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
            <li class="nav-item px-3 d-flex align-items-center">
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
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <h4 class="card-title"> <?=$model->isNewRecord ? \Yii::t('app', 'Create User') : \Yii::t('app', 'Update User')?> 
                <div class="pull-right" style="float: right;"> <?= Html::a(Html::tag('b', 'back', ['class' => 'material-icons']) , ['index'], [
                                      'class' => 'btn btn-xs btn-primary btn-round btn-fab',
                                      'rel'=>"tooltip",
                                      'data' => [
                                          'placement' => 'bottom',
                                          'original-title' => 'Back'
                                      ],
                                      ]) ?>
                </div>
              </h4>
              
          	 <div class="customer-index">
               <?php $form = ActiveForm::begin([
	      'fieldConfig' => [
		      'template' => "{input} {error}",
	      ]
        ]); ?>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group bmd-form-group">
              <label for="<?=Html::getInputId($model, 'firstname');?>" class="bmd-label-floating"> 
              <?=Html::activeLabel($model,'firstname');?> </label> 
              <?= $form->field($model, 'firstname')->textInput(['maxlength' => true])->label(false); ?>
               <span class="bmd-help"> <?=Html::activeHint($model,'firstname');?> </span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group bmd-form-group">
              <label for="<?=Html::getInputId($model, 'lastname');?>" class="bmd-label-floating"> <?=Html::activeLabel($model,'lastname');?> </label> <?= $form->field($model, 'lastname')->textInput(['maxlength' => true])->label(false); ?> <span class="bmd-help"> <?=Html::activeHint($model,'lastname');?> </span>
            </div>
          </div>
        </div>
        </br>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group bmd-form-group">
              <label for="<?=Html::getInputId($model, 'phonenumber');?>" class="bmd-label-floating"> 
                <?=Html::activeLabel($model,'phonenumber');?> 
              </label> 
              <?php
                echo $form->field($model, 'phonenumber')->widget(PhoneInput::className(), [
                  'jsOptions' => [
                      'preferredCountries' => ['us', 'ke', 'uk'],
                  ]
              ]);
              ?>
              <!-- <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => true])->label(false); ?> -->
              <span class="bmd-help"> <?=Html::activeHint($model,'phonenumber');?> </span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group bmd-form-group">
              <label for="<?=Html::getInputId($model, 'email');?>" class="bmd-label-floating"> <?=Html::activeLabel($model,'email');?> </label> 
              <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false); ?> 
              <span class="bmd-help"> <?=Html::activeHint($model,'email');?> </span>
            </div>
          </div>
        </div>
        
            	</div>
              </div>
              <div class="card-footer ml-auto mr-auto"> <?= Html::submitButton($model->isNewRecord ? \Yii::t('app', 'Create') :
           \Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?> </div> <?php ActiveForm::end(); ?>
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







