<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MobileLegends */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="mobile-legends-form">

        <div class="row">
            <div class="col-sm-5">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p class="titlemoba">Diamond Mobile Legends: Bang Bang</p>
                    <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/yss.jpg" alt="...">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="mobile-legends-form">

                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>1. MASUKKAN INFORMASI AKUN</p>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'id_account')->textInput(['type' => 'number']) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'server_account')->textInput(['type' => 'number']) ?>
                            </div>
                            <div class="col-md-7">
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
                                        <input type="radio" name="MobileLegends[purchase]" value="86 Diamond">
                                        86 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 23.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="172 Diamond">
                                        172 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 45.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="257 Diamond">
                                        257 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 67.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="344 Diamond">
                                        344 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 85.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="429 Diamond">
                                        429 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 110.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="514 Diamond">
                                        514 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 130.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="706 Diamond">
                                        706 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 175.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="878 Diamond">
                                        878 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 220.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="963 Diamond">
                                        963 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 235.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="1050 Diamond">
                                        1050 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 255.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="1412 Diamond">
                                        1412 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 330.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="MobileLegends[purchase]" value="2194 Diamond">
                                        2194 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 500.000
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>3. PILIH METODE PEMBAYARAN</p>
                        <div class="form-check">
                            <input type="radio" name="MobileLegends[method_payment]" value="DANA">
                            <label>
                                DANA 08889089378
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="MobileLegends[method_payment]" value="OVO">
                            <label>
                                OVO 08889089378
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="MobileLegends[method_payment]" value="Bank Mandiri">
                            <label>
                                Bank Bca 142928912
                            </label>
                        </div>
                    </div>

                    <?php /*$form->field($model, 'purchase')->radioList(
                            [
                                '86 DM Rp 23.000' => '86 Diamonds', '172 Diamonds Rp 45.000' => '172 Diamonds'
                            ]
                        ) */ ?>

                    <?php // $form->field($model, 'method_payment')->textInput(['maxlength' => true]) 
                    ?>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p> 4. UPLOAD BUKTI PEMBAYARAN </p>
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