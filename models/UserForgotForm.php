<?php

namespace app\models;

use yii\base\Model;

/**
 * Class UserForgotForm
 * @package app\models
 */
class UserForgotForm extends Model
{
    /**
     * @var string
     */
    public $email = '';
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'validateEmail'],
        ];
    }

    /**
     * Validates the email.
     * This method serves as the inline validation for email.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validateEmail($attribute, $params)
    {
        if ($this->hasErrors()) {
            return;
        }
        
        $model = User::findOne([
            'email'  => $this->$attribute, 
            'status' => 'active'
        ]);
        
        if (empty($model)) {
            $this->addError('email', 'Invalid email address!');
        }
    }

	/**
	 * @return bool
	 * @throws \yii\base\Exception
	 */

    public function sendEmail() {
        $token = substr(base64_encode(sha1(mt_rand())), 0, 64);
        $model = User::find()->where(['email' => $this->email])->one();
        $model->setAttributes(['token' => $token]);
        if ($model->save()) {
            $mail = Yii::$app->mailer->compose('redirect', ['model' => $model])
                    ->setFrom('pmuthoka@allpremium.co.ke')
                    ->setTo($model->email);
            var_dump($mail);
        }
    }

	// public function sendEmail() {
	// 	if ( ! $this->validate() ) {
	// 		return false;
	// 	}

	// 	if ( ! ( $model = User::findByEmail( $this->email ) ) ) {
	// 		return false;
	// 	}

	// 	$model->password_reset_key = \Yii::$app->security->generateRandomString();
	// 	$model->save( false );

	// 	return true;
	// }
}
