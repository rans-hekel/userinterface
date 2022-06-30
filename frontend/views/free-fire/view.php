<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\FreeFire */

$this->title = 'Free Fire Diamonds';
$this->params['breadcrumbs'][] = ['label' => 'Free Fires', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$this->registerCss("

.div-center {
    width: 900px;
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

");
?>
<div class="free-fire-view">
    <div class="div-center">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'id_account',
                    'region_account',
                    'purchase',
                    'method_payment',
                    'transaction_invoice',
                ],
            ]) ?>

            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
                <?= Html::a('Confirm', ['zerostore/index'], [
                    'class' => 'btn btn-dark float-right',
                    'data' => [
                        'confirm' => 'Are you sure to confirm the topup? Press OK to Confirm, Contact 08816263425 if you have any questions',
                    ],
                ]) ?>
            </p>

        </div>
    </div>

</div>