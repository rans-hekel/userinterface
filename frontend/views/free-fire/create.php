<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\FreeFire */

$this->title = 'Free Fire Diamonds';
$this->params['breadcrumbs'][] = ['label' => 'Free Fires', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="free-fire-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
