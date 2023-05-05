<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id_profile
 * @property string $name
 * @property string $email
 * @property string $salary
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname','email', 'phone', 'dob', 'address','city','state', 'nationality', 'business_type'], 'required'],
            [['firstname','lastname', 'address', 'city','state','nationality', 'business_type'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['email'], 'email'],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fistname' => 'FirstName',
            'lastname' => 'LastName',
            'email' => 'Email',
            'phone' => 'Phone',
            'dob' => 'DOB',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'nationality' => 'Nationality',
            'business_type' => 'Business Type'
        ];
    }
}
