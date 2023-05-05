<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Topup extends Model
{
	public $id;
	public $currency;
	public $amount;
	public $balance;
	public $pin;
	public $ref;
	public $type;

	/**
	*      * @return array the validation rules.
	*           */
	public function rules()
	{
	    return [
		    [['id', 'currency', 'amount', 'balance', 'pin', 'ref', 'type'], 'required'],
	    ];
	}

}
