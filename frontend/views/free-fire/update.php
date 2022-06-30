<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\FreeFire */

$this->title = 'Update Free Fire: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Free Fires', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="free-fire-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
