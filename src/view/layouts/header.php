<?php

/** @var \yii\web\View $this */
/** @var string $directoryAsset */

use yii\helpers\Html;
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-th-large"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-center">
                <?php if (Yii::$app->user->isGuest): ?>
                    <?= Html::a(
                        'Login',
                        ['site/login'],
                        ['class' => 'dropdown-item']
                    ) ?>
                <?php else: ?>
                    <?= Html::a(
                        'Profile <span class="badge badge-info">' . Yii::$app->user->identity->username . '</span>',
                        ['#'],
                        ['class' => 'dropdown-item']
                    ) ?>
                    <div class="dropdown-divider"></div>
                    <?= Html::a(
                        'Logout',
                        ['/site/logout'],
                        ['data-method' => 'post', 'class' => 'dropdown-item']
                    ) ?>
                <?php endif; ?>
            </div>
        </li>
    </ul>
</nav>
