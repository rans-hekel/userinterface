<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reseller */

$this->title = 'Reseller';
$this->params['breadcrumbs'][] = ['label' => 'Resellers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reseller-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
