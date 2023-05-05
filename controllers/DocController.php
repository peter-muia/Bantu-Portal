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

/**
 * Class NotificationsController
 * @package app\controllers
 */
class DocController extends \yii\web\Controller
{
	public $layout = 'mains';
	/**
	 * @param \yii\base\Action $action
	 *
	 * @return bool|void
	 * @throws \yii\web\BadRequestHttpException
	 */
	public function beforeAction( $action )
	{
		if ( \Yii::$app->getUser()->isGuest ) {
			return \Yii::$app->getResponse()->redirect( \yii\helpers\Url::to(['/site/login']) )->send();
		}
		return parent::beforeAction( $action ); // TODO: Change the autogenerated stub
	}

	/**
	 * @return string
	 */
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionLimited()
    {
        return $this->render('limited', []);
    }
}
