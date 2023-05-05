<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Whitelist extends Model
{
        public $whitelist;
        public $password;
        public $pin;
        public $response;

        /**
        *      * @return array the validation rules.
        *           */
        public function rules()
        {
            return [
                    [['whitelist'], 'required'],
                    [['password', 'pin'], 'required'],
                    [['response'], 'safe']
            ];
        }

}
