<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MobileLegends */

$this->title ='Mobile Legends: Bang Bang! Diamond';
$this->params['breadcrumbs'][] = ['label' => 'Mobile Legends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobile-legends-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
