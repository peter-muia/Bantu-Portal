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
?> <?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="
	<?= Yii::$app->language ?>">
  <head>
    <meta charset="
			<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= \Yii::getAlias('@web/css/site.css'); ?>" rel="stylesheet" />
    <link href="<?= \Yii::getAlias('@web/css/slider/style.css'); ?>" rel="stylesheet" />
    <link href="<?= \Yii::getAlias('@web/css/slider/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?= \Yii::getAlias('@web/css/slider/animate.css'); ?>" rel="stylesheet" />
    <link href="<?= \Yii::getAlias('@web/css/slider/owl.carousel.min.css'); ?>" rel="stylesheet" />
    <link href="<?= \Yii::getAlias('@web/css/slider/bootstrap.min.css'); ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <!-- <link href="<?= \Yii::getAlias('@web/css/material-dashboard.css?v=2.1.2'); ?>" rel="stylesheet" /> -->
    <!-- CSS Just for demo purpose, don't include it in your project --> <?php $this->registerCsrfMetaTags() ?> <title> <?= Html::encode($this->title) ?> </title> <?php $this->head() ?>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Product+Sans:300,400,600,700" rel="stylesheet">
  </head>
  <body> <?php $this->beginBody() ?> <div class="wrap"> <?php
        // NavBar::begin([
        //     'brandLabel' => Yii::$app->name,
        //     'brandUrl' => Yii::$app->homeUrl,
        //     'options' => [
        //         'class' => 'navbar-inverse navbar-fixed-top',
        //     ],
        // ]);

        ?> <?php
        NavBar::begin([
            'brandLabel' => '<p class="navbar-brand m-0" style="font-size:34px; font-family:Product Sans">
                                <a href="<?= Url::home() ?>">
                                  <img style="width: 145px; height: 58px;" src="/img/newlogo.png" alt="" class="p-1">
                                </a>
                              </p>',
            'brandUrl' => ['/'],

        ]);
        echo Nav::widget([

            'options' => ['class' => 'navbar navbar-expand-md navbar-light bg-light'],
            'options' => ['class' => 'float-right'],

            'items' => [
                
                [
                    'label' => 'Home',
                    'url' => ['../#home']
                ],
                ['label' => 'About',  'options' => ['class' => ['']],
                 'url' => ['../#about']
                ],
                ['label' => 'Services',
                 'url' => ['../#services'],
              ],
              ['label' => 'Contact',
                 'url' => ['../#contact'],
              ],
                ['label' => '',
                ],
                ['label' => '',
                ],
                ['label' => '',
                ],
                ['label' => '',
                ],
                // ['label' => '',
                // ],
              // ['label' => '',
              //   ],
              //   ['label' => '',
              //   ],
              //   ['label' => '',
              //   ],

                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : 
                
                ([
                    'label' => Yii::$app->user->identity->investor_type,
                    
                    'items' => [
                        ['label' => 'Profile', 'url' => ['/site/profile']],
                        // ['label' => Yii::$app->user->identity->email],
                        '<div class="dropdown-divider"></div>',
                         ['label' => 'Dashboard', 'url' => ['/dashboard']],
                        '<div class="dropdown-divider"></div>',
                        [
                            'label' => 'Logout',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ]
                    ]
                        ]),

                Yii::$app->user->isGuest ? (
                  [
                    'label' => 'Open an account', 
                    'url' => ['/site/register'],
                    'filter' => '<button>Button</button>'
                    ]) : 
                
                ([
                    'label' => Yii::$app->user->identity->business_type,
                ])


            ],


        ]);
        NavBar::end();
        ?> <div class="wrap"> <?= Alert::widget() ?> <?= $content ?> </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">
          <ul>
            <!-- <li>
              <a href="/site/policy"> Privacy Policy </a>
            </li>
            <li>
              <a href="/site/policy"> Terms & Conditions </a>
            </li> -->
            <!-- <li><a href="https://www.coderseden.com/blog">
              Blog
            </a></li> -->
          </ul>
        </nav>
        <div class="copyright float-right"> &copy; <script>
            document.write(new Date().getFullYear())
          </script>,
          <!-- <i class="material-icons">favorite</i>  -->
          <a href="#" target="_blank" style="color: #2e2e77">Bantu</a>.
        </div>
      </div>
    </footer> <?php $this->endBody() ?>
  </body>
</html> <?php $this->endPage() ?>
