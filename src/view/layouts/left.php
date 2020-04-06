<?php

/** @var \yii\web\View $this */
/** @var string $directoryAsset */

use yii\helpers\Html;
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= Html::img($directoryAsset . '/img/AdminLTELogo.png', ['alt' => 'Logo Image', 'class' => 'img-circle elevation-2']) ?>
            </div>
            <div class="info">
                <?= yii\helpers\Html::a(Yii::$app->name, ['/'], ['class' => 'd-block']) ?>
            </div>
        </div>
        <nav class="mt-2">
            <?php if (!Yii::$app->user->isGuest): ?>
            <?= dmstr\adminlte\widgets\Menu::widget(
                [
                    'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview'],
                    'items' => [
                        ['label' => 'Menu Yii2', 'header' => true],
                        [
                            'label' => 'Profile',
                            'iconType' => 'far',
                            'icon' => 'user',
                            'url' => ['#'],
                            'badge' => '<span class="badge badge-info right">' . Yii::$app->user->identity->username . '</span>'
                        ],
                        ['label' => 'Gii', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Some tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'iconType' => 'far',
                                    'icon' => 'circle',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'iconType' => 'far', 'icon' => 'dot-circle', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'iconType' => 'far',
                                            'icon' => 'dot-circle',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
            ) ?>
            <?php endif; ?>
        </nav>

    </div>

</aside>
