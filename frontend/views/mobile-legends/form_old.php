<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerCss("
.form {
  margin-top: 40px;
}

.titlemoba {
  font-weight: bold;
  font-size: 25px;
}

.denom {
  width: 150px;
  margin: 10px 10px 10px 10px;
  border-color: #4AFFE9;
  border-width: 2px;
}

p.text-center {
    margin-bottom: -1px;
}

.bill {
  width: 150px;
  margin: 10px 10px 10px 10px;
  border-color: #4AFFE9;
  border-width: 2px;
}

.detail {
  text-align: right;
  background-color: #4AFFE9;
  border-color: #4AFFE9;
  border-width: 2px;
}

.denom:hover, .bill:hover {
  color: black;
  font-weight: bold;
  background-color: #4AFFE9; 
}

");

/* @var $this yii\web\View */
/* @var $model frontend\models\MobileLegends */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="form">
        <div class="row">
            <div class="col-sm-6">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p class="titlemoba">Diamond Mobile Legends: Bang Bang</p>
                    <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/yss.jpg" alt="...">
                </div>
            </div>
            <div class="col-sm-6">
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p>1. MASUKKAN INFORMASI AKUN</p>
                    <div class="row">
                        <div class="col">
                            <?= $form->field($model, "id_account")->textInput(['type' => 'number']) ?>
                        </div>
                        <div class="col">
                            <?= $form->field($model, "server_account")->textInput(['type' => 'number']) ?>
                        </div>
                    </div>
                    <?= $form->field($model, "nickname_account")->textInput() ?>
                </div>
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p>2. PILIH JUMLAH DIAMOND</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn denom">
                            86 Diamonds
                            <p class="text-center">Rp. 23.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            172 Diamonds
                            <p class="text-center">Rp. 45.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            257 Diamonds
                            <p class="text-center">Rp. 67.000</p>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn denom">
                            344 Diamonds
                            <p class="text-center">Rp. 85.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            429 Diamonds
                            <p class="text-center">Rp. 110.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            514 Diamonds
                            <p class="text-center">Rp. 130.000</p>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn denom">
                            706 Diamonds
                            <p class="text-center">Rp. 175.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            878 Diamonds
                            <p class="text-center">Rp. 220.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            963 Diamonds
                            <p class="text-center">Rp. 235.000</p>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn denom">
                            1050 Diamonds
                            <p class="text-center">Rp. 255.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            1412 Diamonds
                            <p class="text-center">Rp. 330.000</p>
                        </button>
                        <button type="button" class="btn denom">
                            2194 Diamonds
                            <p class="text-center">Rp. 500.000</p>
                        </button>
                    </div>
                </div>
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p>3. PILIH METODE PEMBAYARAN</p>
                    <div class="d-flex justify-content-center">
                        <input type="button" class="btn bill">
                        DANA 08816263425
                        </input>
                        <input type="button" class="btn bill">
                        OVO 08816263425
                        </input>
                        <input type="button" class="btn bill">
                        Bank Mandiri 1410019548387
                        </input>
                    </div>
                </div>
                <?php $form::end() ?>
            </div>
        </div>
    </div>

    <div class="mobile-legends-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_account')->textInput(['type' => 'number']) ?>

        <?= $form->field($model, 'server_account')->textInput(['type' => 'number']) ?>

        <?= $form->field($model, 'nickname_account')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'purchase')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'method_payment')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'transaction_invoice')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>