<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\web\IdentityInterface;
use yii\rbac\Item;


/**
 * This is the model class for table "user".
 *
 * @property int $user_id
 * @property int|null $group_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $auth_key
 * @property string|null $access_token
 * @property string|null $password
 * @property string|null $password_reset_token
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
	/**
	 * @var
	 */
	public $passwd = '';
	// public $password_reset_token;

	/**
	 * Constants
	 */
	const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

	const SCENARIO_CREATE = 'create';
	const SCENARIO_UPDATE = 'update';

	const ROLE_ADMIN = 'admin';
	const ROLE_MERCHANT = 'merchant';
	const ROLE_SHOP = 'shop';
	const ROLE_SUPPORT = 'support';
	const ROLE_CUSTOMER = 'customer';

	const ADMIN = 1;
	const MERCHANT = 2;
	const SHOP = 3;
	const SUPPORT = 4;
	const CUSTOMER = 5;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public function behaviors() {
	    $behaviors = parent::behaviors();
		

	    // auto fill timestamp columns.
	    if ($this->hasAttribute('created_at') || $this->hasAttribute('updated_at')) {
		    $behavior = [
			    'class' => TimestampBehavior::class,
			    'value' => new Expression('NOW()'),
		    ];
		    if ($this->hasAttribute('created_at')) {
			    $behavior['createdAtAttribute'] = 'created_at';
		    } else {
			    $behavior['createdAtAttribute'] = null;
		    }
		    if ($this->hasAttribute('updated_at')) {
			    $behavior['updatedAtAttribute'] = 'updated_at';
		    } else {
			    $behavior['updatedAtAttribute'] = null;
		    }
		    $behaviors[] = $behavior;
	    }
	    return $behaviors;
    }

	/**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
	        [['email', 'uuid', 'firstname', 'lastname', 'phonenumber', 'investment_type'], 'trim'],
	        ['email', 'unique'],
	        ['email', 'email'],
	        [['firstname', 'lastname', 'email', 'investment_type' ], 'string', 'max' => 100],
	        [['passwd'], 'string', 'length' => [6, 100]],
	        [['firstname', 'phonenumber', 'lastname', 'email','passwd'], 'required', 'on' => self::SCENARIO_CREATE],
	        [['firstname', 'lastname'], 'required', 'on' => self::SCENARIO_UPDATE],
			[['uuid'], 'safe'],
			['role', 'default', 'value' => 'customer'],
		//	['permission', 'default', 'value' => 5],
			['role', 'in', 'range' => [self::ROLE_ADMIN, self::ROLE_SUPPORT, self::ROLE_SHOP, self::ROLE_MERCHANT, self::ROLE_CUSTOMER]],
		//	['permission', 'in', 'range' => [self::ADMIN, self::SUPPORT, self::SHOP, self::MERCHANT, self::CUSTOMER]],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'User Id',
			'phonenumber' => 'Phone Number',
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'investment_type' => 'Investment Type',
            'email' => 'Email',
			'role' => 'Role',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'password' => 'Password',
	        'passwd'   => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
			'uuid' => 'Uuid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

	public function attributeHints() {
		return [
			'firstname'        => \Yii::t('app', 'Enter your First Name'),
			'lastname'         => \Yii::t('app', 'Enter your Last Name'),
			'email'            => \Yii::t('app', 'Enter your Email'),
			'passwd'           => \Yii::t('app', 'Key in your  Password'),
			'role'             => \Yii::t('app', 'Pick Role'),
            'investment_type'     => \Yii::t('app', 'Enter your  Investment Type'),
			'phonenumber'     => \Yii::t('app', 'Enter your Phone Number'),
			'status'           => \Yii::t('app', 'Pick a status for this user'),
		];
	}

	/**
	 * @param bool $insert
	 *
	 * @return bool
	 * @throws \yii\base\Exception
	 */
	public function beforeSave($insert)
	{
		if (!parent::beforeSave($insert)) {
			return false;
		}

		if (!empty($this->passwd)) {
			$this->password = static::hashPassword($this->passwd);
		}
		
		return true;
	}

	public function getStatusesList()
	{
		return [
			'inactive' => \Yii::t('app', 'Inactive'),
			'active'   => \Yii::t('app', 'Active'),
		];
	}
	public function getRoleList()
	{
		return [
			'admin' => \Yii::t('app', 'admin'),
			'merchant'   => \Yii::t('app', 'merchant'),
			'shop'   => \Yii::t('app', 'shop'),
			'support'   => \Yii::t('app', 'support'),
			'customer'   => \Yii::t('app', 'customer'),
		];
	}

	public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

	/**
	 * @param int|string $user_id
	 *
	 * @return User|IdentityInterface|null
	 */
	public static function findIdentity($id)
	{
		return static::findOne($id);
	}

	/**
	 * @param mixed $token
	 * @param null $type
	 *
	 * @return User|IdentityInterface|null
	 */
	public static function findIdentityByAccessToken($token, $type = null)
	{
		return static::findOne(['access_token' => $token, 'status' => 'active']);
	}

	/**
	 * @param $email
	 *
	 * @return User|null
	 */
	// public static function findByEmail($email)
	// {
	// 	return static::findOne(['email' => $email]);
	// }

	public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

	/**
	 * @param $key
	 *
	 * @return User|null
	 */
	// public static function findByPasswordResetKey($key)
	// {
	// 	return static::findOne(['password_reset_key' => $key, 'status' => 'active']);
	// }

	/**
	 * @return int|string
	 */
	public function getId()
	{
		return $this->id;
	}

//	public function getPermission()
//	{
	//	return $this->permission;
//	}

	/**
	 * @return string|null
	 */
	public function getAuthKey()
	{
		return $this->auth_key;
	}
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

	/**
	 * @param string $authKey
	 *
	 * @return bool
	 */
	public function validateAuthKey($authKey)
	{
		return $this->getAuthKey() === $authKey;
	}

    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password);
    }

	/**
	 * @param $password
	 *
	 * @return string
	 * @throws \yii\base\Exception
	 */
	public static function hashPassword($password)
	{
		return \Yii::$app->security->generatePasswordHash($password);
	}


	/**
	 * @return string
	 */
	public function getFullName()
	{
		return trim(sprintf('%s %s', $this->firstname, $this->lastname));
	}

	public static function isUserAdmin($username)
	{
      if (static::findOne(['username' => $username, 'role' => self::ROLE_ADMIN])){
             return true;
      } else {
             return false;
         }
 	}

	public static function isUserSupport($username)
	{
      if (static::findOne(['username' => $username, 'role' => self::ROLE_SUPPORT])){
             return true;
      } else {
             return false;
      }
	}

	public static function isUserMerchant($username)
	{
      if (static::findOne(['username' => $username, 'role' => self::ROLE_MERCHANT])){
             return true;
      } else {
             return false;
      }
	}

	public static function isUserShop($username)
	{
      if (static::findOne(['username' => $username, 'role' => self::ROLE_SHOP])){
             return true;
      } else {
             return false;
       }
      }
	public static function isUserCustomer($username)
	{
      if (static::findOne(['username' => $username, 'role' => self::ROLE_CUSTOMER])){
             return true;
      } else {
             return false;
      }
   }

   public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }
        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
