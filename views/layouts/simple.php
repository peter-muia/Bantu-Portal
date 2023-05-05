
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Product+Sans:300,400,600,700" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">  
<?php
        NavBar::begin([
            'brandLabel' => '<p class="navbar-brand m-0" style="padding-right: 50%;font-family: Product sans;font-size:30px"><a href="<?= Url::home() ?>"><b style="color: #2e2e97;">Tu</b><b style="color: #f4b800;">pay</b></a></p>',

        ]);
        echo Nav::widget([

            'options' => ['class' => 'navbar navbar-expand-md navbar-light bg-light'],

            'items' => [
                
                // [
                //     'label' => 'Dashboard',
                //     'url' => ['/dashboard/index']
                // ],
                // // ['label' => 'About',  'options' => ['class' => ['']],
                //  'url' => ['/site/about']
                // ],
                // ['label' => 'Contact',
                //  'url' => ['/site/contact']
                // ],

                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : 
                
                ([
                    'label' => Yii::$app->user->identity->businessname,
                    
                    'items' => [
                        ['label' => 'profile', 'url' => ['/site/profile']],
                        //  ['label' => 'change password', 'url' => ['/site/changePassword']],
                        '<div class="dropdown-divider"></div>',
                        [
                            'label' => 'logout',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ]
                    ]
                        ]),

                Yii::$app->user->isGuest ? (['label' => 'Open an account', 'url' => ['/site/register']]) : 
                
                ([
                    'label' => Yii::$app->user->identity->email,
                ])


            ],


        ]);
        NavBar::end();
        ?> 
    <div class="container">       
        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

