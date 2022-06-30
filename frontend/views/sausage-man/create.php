<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SausageMan */

$this->title = 'Sausage Man Candy';
$this->params['breadcrumbs'][] = ['label' => 'Sausage Men', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sausage-man-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
