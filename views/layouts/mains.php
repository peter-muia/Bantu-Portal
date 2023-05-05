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
    
    <!-- <title>Bantu Portal</title> -->
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<!-- <div class="wrapper"> -->



    <div class="main-panel">


<?= $this->render(
	'content.php',
	['content' => $content]
) ?>

<footer class="footer">
      <div class="container-fluid">
        
        <div class="copyright float-right text-sm text-muted"> &copy; <script>
            document.write(new Date().getFullYear())
          </script>,
          <!-- <i class="material-icons">favorite</i>  -->
          <a target="_blank" style="color: #344767; font-weight: 600;">Bantu</a>
        </div>
      </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
