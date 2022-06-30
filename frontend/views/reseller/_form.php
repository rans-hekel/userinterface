<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reseller */
/* @var $form yii\widgets\ActiveForm */

$this->registerCss("

.div-center {
    width: 500px;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    max-width: 100%;
    max-height: 100%;
    overflow: auto;
    padding: 1em 2em;
    display: table;
    border-radius: 10px;
}

h4 {
    margin-bottom: 20px;
}

.join {
    margin-top: 40px;
}

");
?>

<div class="reseller-form">
    <div class="div-center">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">

            <?php $form = ActiveForm::begin(); ?>

            <h4 class="text-center">Many benefits if you join our reseller!</h4>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone_number')->textInput() ?>

            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

            <p>Upload Bukti Pembayaran</p>
            <?= $form->field($model, 'image')->fileInput() ?>

            <div class="form-group text-center">
                <?= Html::submitButton('Join Now', ['class' => 'btn btn-success btn-block join']) ?>
            </div>


            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>