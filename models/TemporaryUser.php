<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temporary_user".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $country_code
 * @property string|null $phonenumber
 */
class TemporaryUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temporary_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'password', 'country_code', 'phonenumber'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
            'country_code' => 'Country Code',
            'phonenumber' => 'Phone Number',
        ];
    }


    public static function findByEmail($email)
    {
        return self::findOne(['email' => $email]);
    }
}