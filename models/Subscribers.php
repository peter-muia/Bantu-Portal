<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_transactions".
 *
 * @property string $trx_id
 * @property int $amount
 * @property string $merchant
 * @property string $service_type
 * @property int $merchant_status
 * @property string $touch_point
 * @property int $user_id
 * @property string $payment_mode
 * @property string $trans_created_date
 * @property string $trans_processed_date
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'email', 'phonenumber', 'status'], 'required'],
            [['id'], 'integer'],
            [['email', 'phonenumber'], 'safe'],
            [['email'], 'string', 'max' => 100],
            [['email', 'id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'merchant' => 'Merchant',
            'service_type' => 'Service ',
            'merchant_status' => 'Merchant Status',
            'touch_point' => 'Touch Point',
        ];
    }
}
