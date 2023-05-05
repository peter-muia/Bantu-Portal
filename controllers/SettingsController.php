<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\filters\AccessControl;
use app\components\Api;
use app\models\Token;
use app\models\Callback;
use app\models\Whitelist;
use app\components\AccessRule;
use yii\filters\VerbFilter;

class SettingsController extends \yii\web\Controller
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

    public function actionToken()
    {
	$uuid = \Yii::$app->user->identity->uuid;
	$model = new Token();
	$token = Api::getToken();
	$data = Yii::$app->request->post();
	if ($model->load($data, null, false)) {
	   if($model->pin) {
		$model->token = Api::approveToken($uuid, $token, $model->pin);
                return $this->render('token', [
                   'model' => $model,
                ]);
            } else
	    //Check password if correct
            if($model->password) {
                $user = User::find()->where(['uuid' => $uuid])->one();
                if (Yii::$app->getSecurity()->validatePassword($model->password, $user['password_hash'])) {
                        $json = Api::generateToken($uuid, $token);
                        $model->token = json_decode($json, true)["msg"];
                } else
                  $model->token = "Invalid credentials";

		return $this->render('token', [
		   'model' => $model,
	   	]);
	    }
	}

	return $this->render('token', [
		'model' => $model,
	]);
    }

    public function actionCallback()
    {
        $uuid = \Yii::$app->user->identity->uuid;
        $token = Api::getToken();
	$model = new Callback();
	$data = Yii::$app->request->post();
	if ($model->load($data, null, false))
	{
	 	//Check password if correct
		if($model->url) {
			$json = Api::setCallback($uuid, $token, $model->url);
			$model->response = json_decode($json, true)["msg"];
			return $this->render('callback', [
			   'model' => $model,
			]);
		}
	}

	$callback = Api::getCallback($uuid, $token);
	return $this->render('callback', [
	   'model' => $model,
	   'callback' => $callback
	]);
    }

    public function actionWhitelist()
    {
	$uuid = \Yii::$app->user->identity->uuid;
        $token = Api::getToken();
        $model = new Whitelist();
        $data = Yii::$app->request->post();
        if ($model->load($data, null, false))
        {
           if($model->pin) {
                $user = User::find()->where(['uuid' => $uuid])->one();
                $model->response = Api::approveWhitelist($uuid, $token, $model->pin);

                return $this->render('whitelist', [
                   'model' => $model,
                ]);
            } else
            //Check password if correct
            if($model->whitelist && $model->password) {
                $user = User::find()->where(['uuid' => $uuid])->one();
                if (Yii::$app->getSecurity()->validatePassword($model->password, $user['password_hash'])) {
                        $json = Api::createWhitelist($uuid, $token, $model->whitelist);
                        $model->response = json_decode($json, true)["msg"];
                } else
                  $model->response = "Invalid credentials";

                 return $this->render('whitelist', [
                     'model' => $model,
                ]);
            }
        }

        return $this->render('whitelist', [
                'model' => $model,
                'whitelist' => Api::getWhitelist($uuid, $token)
        ]);
    }

}


