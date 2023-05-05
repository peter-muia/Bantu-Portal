<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Callback extends Model
{
	public $url;
	public $response;

	/**
	*      * @return array the validation rules.
	*           */
	public function rules()
	{
	    return [
		    [['url'], 'required'],
		    [['response'], 'required'],
	    ];
	}


}
