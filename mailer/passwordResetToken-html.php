<?php 
use yii\helpers\Html;
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?> 
<div class="password-reset">   
 <p>Hello <?= Html::encode($user->firstname) ?>,</p> 
    <p>Follow the link below to reset your password:</p>   
     <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
     <p>Thank you for using our services.</p>
   <p><?= Yii::$app->name ?></p> 
</div>
