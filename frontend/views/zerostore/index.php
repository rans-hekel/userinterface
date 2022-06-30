<?php

/* @var $this yii\web\View */

use yii\bootstrap4\Html;

$this->title = 'LG Store';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss("

.carousel {
    margin-top: -10px;
    margin-bottom: 50px;
}

.carousel-item img {
    width: 100vw;
    height: 400px;
    object-fit: cover;
    object-position: 50% 5%;
    overflow: hidden;
}

.logo {
    border-radius: 25px;
    width: 150px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
}

.card {
    border-radius: 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.ml {
    margin-top: 20px;
    margin-bottom: 20px;
}

.pubg {
    margin-top: 20px;
    margin-bottom: 20px;
}

.ff {
    margin-top: 20px;
    margin-bottom: 20px;
}

.cardbtn {
    border-radius: 50px;
}

.site-index {
    margin-bottom: 50px;
}

");
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/ling.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/pubg.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/freefire.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/yss.jpg" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="site-index">
        <div class="body-content">

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top logo" src="<?= Yii::$app->request->baseUrl ?>/img/logo-ml.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Mobile Legends : Bang Bang!</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <?= Html::a('TOP UP', ['/mobile-legends/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top logo" src="<?= Yii::$app->request->baseUrl ?>/img/logo-pubg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">PUBG Mobile Indonesia</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <?= Html::a('TOP UP', ['/pubg-indonesia/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top logo" src="<?= Yii::$app->request->baseUrl ?>/img/logo-ff.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Free Fire</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <?= Html::a('TOP UP', ['/free-fire/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top logo" src="<?= Yii::$app->request->baseUrl ?>/img/logo-sausage.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Sausage Man Indonesia</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <?= Html::a('TOP UP', ['/sausage-man/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>