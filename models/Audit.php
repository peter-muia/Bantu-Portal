<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "audit".
 *
 * @property int $id
 * @property string $model
 * @property string $action
 * @property string $description
 * @property int $user_id
 * @property int $created_at
 * @SuppressWarnings(StaticAccess)
 */
class Audit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'audit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at', 'unique_id'], 'integer'],
            [['model', 'action', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'model' => Yii::t('app', 'Model'),
            'action' => Yii::t('app', 'Action'),
            'unique_id' => Yii::t('app', 'Unique ID'),
            'description' => Yii::t('app', 'Description'),
            'user_id' => Yii::t('app', 'User ID'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Behaviors
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
                'value' => time(),
            ],
        ];
    }

    /**
     * Trail Function
     */
    public static function trail($model, $action, $uniqueId, $description)
    {
        $trail = new Audit();
        $trail->model = $model;
        $trail->action = $action;
        $trail->unique_id = $uniqueId;
        $trail->description = $description;
        $trail->user_id = \Yii::$app->user->identity->id;
        $trail->save();
    }
}
