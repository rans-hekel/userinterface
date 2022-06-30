<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php

        NavBar::begin([
            'brandLabel' => 'LG Store',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            ],
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['zerostore/index']],
            [
                "label" => "Game",
                "url" => "#",
                "items" => [
                    ["label" => "Mobile Legends", "url" => ["mobile-legends/create"]],
                    ["label" => "PUBG Mobile Indonesia", "url" => ["pubg-indonesia/create"]],
                    ["label" => "Free Fire", "url" => ["free-fire/create"]],
                    ["label" => "Sausage Man", "url" => ["sausage-man/create"]],
                ],
            ],
            ['label' => 'Reseller', 'url' => ['reseller/create']],
            ['label' => 'Register', 'url' => ['zerostore/signup']],
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Login', 'url' => ['zerostore/login']];
        } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/zerostore/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav d-flex justify-content-end w-100'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>

    <!-- Remove the container if you want to extend the Footer to full width. -->


    <footer class="text-white text-center text-lg-start bg-dark">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">About company</h5>
                    <p class="text-justify">
                        LG Store adalah tempat topup online game mobile terpercaya sejak tahun 2019. LG Store menyediakan 4 game yakni
                        Mobile Legends : Bang Bang, PUBG Mobile, Free Fire, dan Sausageman. Game terlaris untuk saat ini adalah game
                        Mobile Legends : Bang Bang.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">Search something <i class="fas fa-search"></i></h5>

                    <div class="form-outline form-white mb-4">
                        <input type="text" id="formControlsm" class="form-control form-control-sm" />
                    </div>

                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Jakarta, Indonesia</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">Rangga@gmail.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 62 8889089378</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fab fa-instagram"></i></span><span class="ms-2">@LGSTORE</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Opening hours</h5>

                    <table class="table text-center text-white">
                        <tbody class="fw-normal">
                            <tr>
                                <td>Mon - Fri:</td>
                                <td>10.00 - 22.00</td>
                            </tr>
                            <tr>
                                <td>Sat - Sun:</td>
                                <td>10.00 - 22.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright: LG Store
        </div>
        <!-- Copyright -->
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
