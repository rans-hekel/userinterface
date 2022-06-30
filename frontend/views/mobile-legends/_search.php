<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MobileLegendsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobile-legends-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_account') ?>

    <?= $form->field($model, 'server_account') ?>

    <?= $form->field($model, 'nickname_account') ?>

    <?= $form->field($model, 'purchase') ?>

    <?php // echo $form->field($model, 'method_payment') ?>

    <?php // echo $form->field($model, 'transaction_invoice') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
