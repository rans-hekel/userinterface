<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PubgIndonesia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">
    <div class="pubg-indonesia-form">
        <div class="row">
            <div class="col-sm-5">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p class="titlepubg">UC PUBG Mobile Indonesia</p>
                    <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/pubg.jpg" alt="...">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="mobile-legends-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>1. MASUKKAN INFORMASI AKUN</p>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'id_account')->textInput(['type' => 'number']) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($model, 'nickname_account')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>2. PILIH ITEM PEMBELIAN</p>
                        <div class=form-check>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="105 UC">
                                        105 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 20.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="131 UC">
                                        131 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 25.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="263 UC">
                                        263 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 50.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="530 UC">
                                        530 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 95.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="825 UC">
                                        825 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 140.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="1100 UC">
                                        1100 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 185.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="1925 UC">
                                        1925 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 320.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="2200 UC">
                                        2200 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 365.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="PubgIndonesia[purchase]" value="3025 UC">
                                        3025 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/UC.png" alt="..."> Rp 500.000
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>3. PILIH METODE PEMBAYARAN</p>
                        <div class="form-check">
                            <input type="radio" name="PubgIndonesia[method_payment]" value="DANA">
                            <label>
                                DANA 08889089378
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="PubgIndonesia[method_payment]" value="OVO">
                            <label>
                                OVO 08889089378
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="PubgIndonesia[method_payment]" value="Bank Mandiri">
                            <label>
                                Bank Bca 142928912
                            </label>
                        </div>
                    </div>

                    <?php /*$form->field($model, 'purchase')->radioList(
                            [
                                '86 UC Rp 23.000' => '86 Diamonds', '172 Diamonds Rp 45.000' => '172 Diamonds'
                            ]
                        ) */ ?>

                    <?php // $form->field($model, 'method_payment')->textInput(['maxlength' => true]) 
                    ?>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>4. UPLOAD BUKTI PEMBAYARAN </p>

                        <?= $form->field($model, 'image')->fileInput() ?>

                        <div class="form-group">
                            <?= Html::submitButton('Detail Top Up', ['class' => 'btn btn-dark btn-block']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php /*
<div class="pubg-indonesia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_account')->textInput() ?>

    <?= $form->field($model, 'nickname_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purchase')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'method_payment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transaction_invoice')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div> */ ?>