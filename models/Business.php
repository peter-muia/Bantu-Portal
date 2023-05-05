<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Business extends Model
{
	public $id;
	public $name;
        public $email;
	public $phone;
	/**
	*      * @return array the validation rules.
	*           */
	public function rules()
	{
	    return [
		    [['id'], 'required'],
		     ['name', 'required'],
             	     ['email', 'required'],
               	   ['phone', 'required']

	    ];
	}

}

