<?php
namespace app\components;

use Yii;

/**
 * Extended yii\web\User
 *
 * This allows us to do "Yii::$app->user->something" by adding getters
 * like "public function getSomething()"
 *
 * So we can use variables and functions directly in `Yii::$app->user`
 */
class User extends \yii\web\User
{
    // public function getBusinessname()
    // {
    //     return \Yii::$app->user->identity->id;
    // }

    public function getUuid()
    {
        return \Yii::$app->user->identity->uuid;
    }
}