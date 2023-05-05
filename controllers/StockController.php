<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\filters\AccessControl;
use app\components\Api;
use app\models\Stock;
use app\models\Callback;
use app\models\Whitelist;
use app\components\AccessRule;
use yii\filters\VerbFilter;

class StockController extends \yii\web\Controller
{
    public $layout = 'business';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
       return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                // We will override the default rule config with the new AccessRule class
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['buy','sell', 'view', 'delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['buy', 'sell', 'view'],
                        // Allow finance and admins to create and update
                        'roles' => [
                               User::ROLE_MERCHANT,
                               User::ROLE_SHOP,
			                   User::ROLE_ADMIN
                        ],
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        // Allow admins to delete
                        'roles' => [
                            User::ROLE_ADMIN
                        ],
                    ],
                ],
                'denyCallback' => function($rule, $action) {
                    //redirection here
                    return Yii::$app->getResponse()->redirect(['/site/about']);
               }
            ]
        ];
    }

   public function actionIndex() {
         return \Yii::$app->getResponse()->redirect( \yii\helpers\Url::to(['/dashboard']) )->send();
   }

    public function actionBuy()
    {
        return $this->render('buy');
    }

    public function actionSell()
    {
        return $this->render('sell');
    }

    public function actionView($id)
    {
        $stock = Stock::findOne($id);
        $model = new Stock();
        $price1 = Stock::find()->where(['id' => [2]])->all();

        return $this->render('view', [
            'stock' => $stock,
            'model' => $model,
            'price1' => $price1,
        ]);
    }

}


