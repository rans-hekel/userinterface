<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MobileLegends */

$this->title = 'Update Mobile Legends: ' . $model->nickname_account;
$this->params['breadcrumbs'][] = ['label' => 'Mobile Legends', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mobile-legends-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
