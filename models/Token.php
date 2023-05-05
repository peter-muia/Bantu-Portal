<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Token extends Model
{
	public $token;
	public $password;
	public $pin;

	/**
	*      * @return array the validation rules.
	*           */
	public function rules()
	{
	    return [
		    [['token'], 'required'],
		     [['password', 'pin'], 'required']
	    ];
	}

}
