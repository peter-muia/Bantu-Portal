<?php
namespace app\models;


// use app\models\SignupForm;
use yii\base\Model;
use Yii;
use yii\db\ActiveRecord;
/**
 * Signup form
 */
class UserForm extends User
{
    public $passwd = '';

    public function findModel($id)
    {
        if (($model = UserForm::findOne($id)) !== null) {
            return $model;
        } else {
            // throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function update_user(){
        $id = Yii::$app->user->id;
        $user = User::findOne($id);

    $user->firstname = $this->firstname;
    $user->lastname = $this->lastname;
    $user->email = $this->email;
   // $user->role = $this->role;
    $user->phonenumber = $this->phonenumber;
    $user->setPassword($this->passwd);
    $user->save();

    }

}
