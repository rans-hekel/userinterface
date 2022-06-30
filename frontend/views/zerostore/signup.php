<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->registerCss(" 

h3 {
    margin-bottom: 20px;
}

.back {
    background-image: url('/img/haya.jpg');
    width: 100%;
    background-position: center;
    position: absolute;
    top: 0;
    bottom: 0;
  }
  
  .div-center {
    width: 400px;
    height: 200px;
    background-color: #fff;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    max-width: 100%;
    max-height: 100%;
    overflow: auto;
    padding: 1em 2em;
    border-bottom: 2px solid #ccc;
    display: table;
    border-radius: 10px;
  }
  
  div.content {
    display: table-cell;
    vertical-align: middle;
  }

  .btn {
      margin-top: 20px;
  }

");
?>
<div class="back">
    <div class="div-center">
        <div class="content">
            <h3> <?= Html::encode($this->title) ?></h3>

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <br>

            <p>Already have account? <?= Html::a('Log In', ['zerostore/login']) ?> </p>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>