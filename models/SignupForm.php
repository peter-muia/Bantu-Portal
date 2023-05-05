<?php
namespace app\models;


// use app\models\SignupForm;
use yii\base\Model;
use Yii;
use yii\db\ActiveRecord;
use app\components\UUID;
use app\service\TwilioSMSVerificationService;
use yii\helpers\VarDumper;

/**
 * Signup form
 */

class SignupForm extends ActiveRecord
{  
    public $uuid;
    public $firstname;
    public $lastname;
    // public $country_code;
    public $phonenumber;
    public $investment_type;
    public $email;
    public $password;
    public $confirm_password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
        
            // ['country_code', 'filter', 'filter' => 'trim'],
            // ['country_code', 'required'],

            ['phonenumber', 'filter', 'filter' => 'trim'],
            ['phonenumber', 'required'],
            ['phonenumber', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This Phone number has already been taken.'],
            ['phonenumber', 'string', 'min' => 2, 'max' => 255],

            ['uuid', 'unique'],
            ['firstname', 'required'],
            ['lastname', 'required'],
            ['investment_type', 'required'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['confirm_password', 'compare','compareAttribute' => 'password','message' => 'Password don\'t match'],
            [['agree'],'safe'],
            [['confirm_password'],'safe'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
      global $uuid;
        if ($this->validate()) {
            $user = new TemporaryUser();
            // $user->country_code = $this->country_code;
            $user->phonenumber = $this->phonenumber;
            $user->uuid = UUID::v4();
            $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->investment_type = $this->investment_type;
            $user->email = $this->email;
            $user->password = \Yii::$app->security->generatePasswordHash($this->password);
            // $user->setPassword($this->password);
            // $phoneNumber = '+'.$this->country_code.$this->phonenumber;
            $phoneNumber = $this->phonenumber;

            // $user->generateAuthKey();
            // echo "<script>console.log('My uuid is: " . $uuid . "' );</script>";

            if ($user->save()) {
                $verificationService = new TwilioSMSVerificationService($phoneNumber);
                $verificationService->sendVerificationToken();
                $this->storeDataInSession($phoneNumber, $user);
                return true;
            }
    
            \Yii::error("User was not saved. ". VarDumper::dumpAsString($user->errors));
            return false;
            
            // if ($user->save()) {
            //     return $user;
            // }
        }

        return null;
    }

    public function storeDataInSession($phoneNumber, $user)
    {
        $session = \Yii::$app->session;
        $session->set('phoneNumber', $phoneNumber);
        $session->set('user', $user);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
		'businessname' => 'Business Name',
		'firstname' => 'First Name',
		'lastname' => 'Last Name',
        'country_code' => 'Country Code',
		'phonenumber' => 'Phone Number',
	];
    }
}
