<?php


namespace app\models;

use app\service\TwilioSMSVerificationService;
use yii\base\Model;

class VerifyUserForm extends Model
{
    public $token;

    public function rules()
    {
        return [
            [['token'], 'required'],
        ];
    }

    public function verifyUser()
    {
        $session = \Yii::$app->session;
        $phoneNumber = $session->get('phoneNumber');
        $verificationService = new TwilioSMSVerificationService($phoneNumber);

        if ($verificationService->isValidToken($this->token)) {
            $userSessionDetails = $session->get('user');
            $user = new User();
            $user->firstname = $userSessionDetails['firstname'];
            $user->lastname = $userSessionDetails['lastname'];
            $user->email = $userSessionDetails['email'];
            $user->investment_type = $userSessionDetails['investment_type'];
            // $user->country_code = $userSessionDetails['country_code'];
            $user->phonenumber = $userSessionDetails['phonenumber'];
            $user->uuid = $userSessionDetails['uuid'];
            $user->password = $userSessionDetails['password'];
            $user->auth_key = \Yii::$app->security->generateRandomString();
            $user->access_token = \Yii::$app->security->generateRandomString();
            $user->verified = true;

            $session->setFlash('verified', 'Your phone number has been verified. Please log in');
            if ($user->save()) {
                return true;
            }
        }

        \Yii::error("Token not valid. ");
        return false;
    }
}