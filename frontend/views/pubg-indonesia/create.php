<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PubgIndonesia */

$this->title = 'UC PUBG Indonesia';
$this->params['breadcrumbs'][] = ['label' => 'Pubg Indonesias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pubg-indonesia-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
