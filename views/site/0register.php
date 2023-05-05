<?php
    use yii\helpers\Html;
    use yii\bootstrap4\ActiveForm;

    $this->title = 'Signup';
    $this->params['breadcrumbs'][] = $this->title;
?> <div class="site-signup">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Signup</div>
          <div class="card-body">
            <div class="customer-form"> <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?> <div class="side"> <?= $form->field($model, 'businessname') ?> </div>
              <div class="side"> <?= $form->field($model, 'firstname') ?> </div>
              <div class="side"> <?= $form->field($model, 'lastname') ?> </div>
              <div class="side"> <?= $form->field($model, 'business_type')
                                ->dropDownList(
                                    ['prompt'=>'Select a Business Type',
                                    'Limited Liability' => 'Limited Liability' ,
                                    'NGO' => 'NGO' ,
                                    'Partnership' => 'Partnership' ,
                                    'Sole Proprietor' => 'Sole Proprietor'])
                                ->label(false);
                                ?> </div> <?= $form->field($model, 'email') ?> <div class="sideside"> <?= $form->field($model, 'password')->passwordInput()->hint('6 character minimum') ?> </div>
              <div class="form-group"> <?= Html::submitButton('Open an account', ['class' => 'btn btn-button btn-block', 'name' => 'signup-button']) ?> </div> <?php ActiveForm::end(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
