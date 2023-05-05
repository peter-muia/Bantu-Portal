<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\ChangePassword;
use app\models\UserForm;
use app\models\UserForgotForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use yii\web\NotFoundHttpException;
use app\models\User;
use yii\web\UploadedFile;
use \yii\helpers\Url;
use app\components\UUID;
use app\models\VerifyUserForm;

class SiteController extends Controller
{
    public $layout = 'main';
    /**
     * {@inheritdoc}
     */
    public function behaviors() 
    {
        $behaviors = parent::behaviors();
        unset($behaviors['access']);
        return $behaviors;
     }       
 
  
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
   {
        $this->layout='login';
	if (isset($_COOKIE['start'])) {
            unset($_COOKIE['start']); 
            setcookie('start', null, -1);
        }
	if (isset($_COOKIE['end'])) {
            unset($_COOKIE['end']);
            setcookie('end', null, -1);
        }

	if (!\Yii::$app->user->isGuest) {
  	    return $this->redirect(['../dashboard']);
        }
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['../dashboard']);
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
	if (isset($_COOKIE['start'])) {
	    unset($_COOKIE['start']); 
	    setcookie('start', null, -1);
	}
        if (isset($_COOKIE['end'])) {
            unset($_COOKIE['end']);
            setcookie('end', null, -1);
	}

        $this->layout='login';
       
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
       
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
            return $this->redirect(['../dashboard']);
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionChangePassword()
    {
        $this->layout='login';
        $model = new ChangePassword();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->change()) {
            return $this->goHome();
        }

        return $this->render('change-password', [
                'model' => $model,
        ]);
    }

    // public function actionRegister()
    // {
    //     $this->layout='login';
    //     $model = new SignupForm();
    //     if ($model->load(Yii::$app->request->post())) {
            
    //         if ($user = $model->signup()) {
                
    //             if (Yii::$app->getUser()->login($user)) {
    //                 return $this->redirect(['../profile']);
    //             }
    //         }
    //     }

    //     return $this->render('register', [
    //                 'model' => $model,
    //     ]);

    // }

    public function actionRegister()
    {
        $this->layout='login';
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return $this->redirect('verify-user');
        }

        return $this->render('register', [
            'model' => $model
        ]);
    }

    public function actionVerifyUser()
    {
        $this->layout='login';
        $model = new VerifyUserForm();
        if ($model->load(Yii::$app->request->post()) && $model->verifyUser()) {
            return $this->redirect('../profile');
        }

        return $this->render('verifyuser', [
            'model' => $model
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $this->layout='login';
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');
                return $this->redirect(['login']);
                // return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
	$this->layout='login';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password has been saved. Login');
            return $this->redirect(['login']);
            // return $this->goHome();
        }

        return $this->render('resetPasswordForm', [
                'model' => $model,
        ]);
    }

	public function actionForgot()
    {
	    $this->layout = '@app/views/layouts/admin';

        $model = new UserForgotForm();

        /* if form is submitted */
        if ($model->load(\Yii::$app->getRequest()->post())) {
            return $this->redirect(['/site/index']);
        }

        /* view params */
	    \Yii::$app->view->title =  \Yii::t('app', 'Forgot password');

        /* render the view */
        return $this->render('forgot', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $this->layout = 'business';
        $id = Yii::$app->user->id;

        $model = UserForm::findModel($id);

        if ($model->load(Yii::$app->request->post())){
            $model-> update_user();
            Yii::$app->session->setFlash('success', Yii::t('app', 'Successful update!'));            
            return $this->redirect(['profile']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
	Yii::$app->user->logout();

	if (isset($_COOKIE['start'])) {
           unset($_COOKIE['start']);
           setcookie('start', null, -1, '/');
        }
        if (isset($_COOKIE['end'])) {
           unset($_COOKIE['end']);
           setcookie('end', null, -1, '/');
        }
	
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['supportEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
	$this->layout = 'mains';
	if ( \Yii::$app->getUser()->isGuest ) {
           return \Yii::$app->getResponse()->redirect( \yii\helpers\Url::to(['/site/login']) )->send();
        }
        return $this->render('about');
    }

    public function actionPolicy()
    {
        return $this->render('policy');
    }

    public function actionAdmin()
    {
	$this->layout = 'mains';
	if ( \Yii::$app->getUser()->isGuest ) {
           return \Yii::$app->getResponse()->redirect( \yii\helpers\Url::to(['/site/login']) )->send();
        }
        return $this->render('admin');
    }

    public function actionProfile()
    {
	if ( \Yii::$app->getUser()->isGuest )
           return \Yii::$app->getResponse()->redirect( \yii\helpers\Url::to(['/site/login']) )->send();
	$this->layout = 'business';
        return $this->render('profile');
    }

    function _maybe_create_upload_path($path)
    {
        if (!file_exists($path)) {
            mkdir($path, 0755);
            fopen(rtrim($path, '/') . '/' . 'index.html', 'w');
        }
    }
    
}


