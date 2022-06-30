<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FreeFire */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="free-fire-form">

        <div class="row">
            <div class="col-sm-5">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                    <p class="titlefreefire">Diamond Free Fire</p>
                    <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/freefire.jpg" alt="...">
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
                                <?= $form->field($model, 'region_account')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>2. PILIH ITEM PEMBELIAN</p>
                        <div class=form-check>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="70 Diamond">
                                        70 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 10.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="100 Diamond">
                                        100 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 15.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="140 Diamond">
                                        140 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 20.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="210 Diamond">
                                        210 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 30.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="355 Diamond">
                                        355 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 48.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="500 Diamond">
                                        500 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 68.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="720 Diamond">
                                        720 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 98.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="1000 Diamond">
                                        1000 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 135.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="1215 Diamond">
                                        1215 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 165.000
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="1440 Diamond">
                                        1440 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 195.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="2160 Diamond">
                                        2160 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 288.000
                                    </label>
                                </div>
                                <div class="col">
                                    <label>
                                        <input type="radio" name="FreeFire[purchase]" value="4000 Diamond">
                                        4000 <img style="width: 20px" src="<?= Yii::$app->request->baseUrl ?>/img/diamondml.png" alt="..."> Rp 520.000
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <p>3. PILIH METODE PEMBAYARAN</p>
                        <div class="form-check">
                            <input type="radio" name="FreeFire[method_payment]" value="DANA">
                            <label>
                                DANA 08889089378
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="FreeFire[method_payment]" value="OVO">
                            <label>
                                OVO 08889089378
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="FreeFire[method_payment]" value="Bank Mandiri">
                            <label>
                                Bank BCA 142928912
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


<?php /*$form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_account')->textInput() ?>

    <?= $form->field($model, 'region_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purchase')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'method_payment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transaction_invoice')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); */ ?>