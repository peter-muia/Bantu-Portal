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
class Stock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'badge', 'following', 'percentage'], 'required'],
            [['id'], 'integer'],
            [['name', 'badge', 'percentage', 'following'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'badge' => 'Badge',
            'percentage' => 'Percentage ',
            'following' => 'Following',
        ];
    }
    public function getColumnStatus()
    {
        if ($this->arrow == 'up') {
            return 'up';
        } else {
            return 'down';
        }
    }
}
