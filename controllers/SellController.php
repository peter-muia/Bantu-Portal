<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;
use app\components\Api;
use app\models\Callback;

class SellController extends \yii\web\Controller
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
                'only' => ['index','create', 'update', 'delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'create', 'update'],
                        // Allow finance and admins to create and update
                        'roles' => [
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

    public function actionIndex()
    {
	$uuid = \Yii::$app->user->identity->uuid;
	$model = new Callback();
	$data = Yii::$app->request->post();
	if ($model->load($data, null, false))
	{
	 	//Check password if correct
		if($model->url) {
			$json = Api::setCallback($uuid, $model->url);
			$model->response = json_decode($json, true)["msg"];
			return $this->render('index', [
			   'model' => $model,
			]);
		}
	}

	$token = Api::getToken();
	$callback = Api::getCallback($uuid, $token);

	return $this->render('index', [
	   'model' => $model,
	   'callback' => $callback
	]);
    }
}


