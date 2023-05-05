<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

 AppAsset::register($this);
 $this->beginPage();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="3600;url=/site/logout">
    <link href="../css/nucleo-icons.css" rel="stylesheet" />
  <link href="../css/nucleo-svg.css" rel="stylesheet" />

  <script src="<?= \Yii::getAlias('../js/core/jquery.min.js');?>" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <link href="../css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> 
      <!-- CSS Files -->
  <link href="<?= \Yii::getAlias('../css/soft-ui-dashboard.css?v=1.0.2'); ?>" rel="stylesheet" />



    <?= Html::csrfMetaTags() ?>
    <!-- <title>Bantu Portal</title> -->
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>

</head>
<body>

<?php $this->beginBody() ?>

<?= $this->render(
        'preferences.php'
)
?>

<?= $this->render(
        'sidebar.php'
)
?>

<?= $this->render(
	'content.php',
	['content' => $content]
) ?>

<?= $this->render(
	'footer.php'
)
?>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= \Yii::getAlias('../js/core/popper.min.js');?>" type="text/javascript"></script>
  <script src="<?= \Yii::getAlias('../js/core/bootstrap.min.js');?>" type="text/javascript"></script>
  <script src="<?= \Yii::getAlias('../js/plugins/perfect-scrollbar.min.js');?>" type="text/javascript"></script>
  <script src="<?= \Yii::getAlias('../js/plugins/smooth-scrollbar.min.js');?>" type="text/javascript"></script>
  <script src="<?= \Yii::getAlias('../js/plugins/chartjs.min.js');?>" type="text/javascript"></script>


  <script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
  </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="<?= \Yii::getAlias('../js/soft-ui-dashboard.js?v=2.1.2');?>" type="text/javascript"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

