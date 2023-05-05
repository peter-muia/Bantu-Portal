<?php

namespace app\controllers;

use Yii;
use app\components\Api;
use yii\data\ArrayDataProvider;


/**
 * @SuppressWarnings(StaticAccess)
 */
class ApiController extends \yii\web\Controller
{
   public $layout = 'business';
    public function actionIndex()
    {
	$json = Api::getTransactions('40b77cf9-4cf5-41b7-be1e-d591aa2bd78e', 0, 100);
	
       $dataProvider = new ArrayDataProvider([
    // Define data array by decoding json-string in $jsonResponseString
    // Converted from your Json object somehow...
    'allModels' => json_decode($json, true)["data"],
    // Might need this too... (assuming number is unique identifier)
    'key' => 'id',
    // Set pagination if not using default
    'pagination' => [
        'pageSize' => 10,
    ],
]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);	    
}


    /**
     * Test
     */
    public function actionTest()
    {
	$start = 0;
	$end = 0;
	$token = Api::getToken();
    	//echo "Balance: " . Api::getBalance('40b77cf9-4cf5-41b7-be1e-d591aa2bd78e');
    	print_r(Api::getTopups('40b77cf9-4cf5-41b7-be1e-d591aa2bd78e', $token, $start, $end, 0, 100));
    }

}
