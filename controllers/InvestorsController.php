<?php
/**
 *
 * @package    Material Dashboard Yii2
 * @author     CodersEden <hello@coderseden.com>
 * @link       https://www.coderseden.com
 * @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
 * @license    MIT - https://www.coderseden.com
 * @since      1.0
 */
namespace app\controllers;
use Yii;
use app\models\Business;
use app\models\Topup;
use app\models\User;
use app\models\UserSearch;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;
use app\components\Api;

/**
 * Class NotificationsController
 * @package app\controllers
 */
class InvestorsController extends \yii\web\Controller
{
	public $layout = 'business';
	/**
	 * @param \yii\base\Action $action
	 *
	 * @return bool|void
	 * @throws \yii\web\BadRequestHttpException
	 */
	public function beforeAction( $action )
	{
		if ( \Yii::$app->getUser()->isGuest ) {
			return \Yii::$app->getResponse()->redirect( \yii\helpers\Url::to(['/']) )->send();
		}
		$this->enableCsrfValidation = false; 
            	  return parent::beforeAction($action);
	}

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
                    return Yii::$app->getResponse()->redirect(['/site/admin']);
               }
            ]
        ];
    }
	

	/**
	 * @return string
	 */
    public function actionIndex()
    {
        return $this->render('index', []);
    }

    public function actionView($id = null, $name, $email, $phone)
    {  
        $business = new Business();
        $business->id = $id;
        $business->name = $name;
        $business->email = $email;
	$business->phone = $phone;
	$topup = new Topup();
        $token = Api::getToken();
	$balance = Api::getBalance($id, $token);
	$types = ['Topup', 'Refund'];
	return $this->render('view', [
	    'id' => $id,
            'balance' => $balance,
	    'business' => $business,
	    'topup' => $topup,
	    'types' => $types
        ]);
    }

}
