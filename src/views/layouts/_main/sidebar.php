<?php
/* @var $this \yii\web\View */

use devzyj\yii2\adminlte\widgets\Menu;

$assetBaseUrl = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $assetBaseUrl ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <?= Menu::widget([
            'options' => ['class' => 'sidebar-menu', 'data-widget'=> 'tree'],
            'items' => [
                ['label' => 'HEADER', 'options' => ['class' => 'header']],
                ['label' => 'Link', 'icon' => 'link', 'url' => ['#'], 'active' => true],
                ['label' => 'Another Link', 'icon' => 'link', 'url' => ['#']],
                ['label' => 'Multilevel', 'icon' => 'link', 'url' => ['#'], 'items' => [
                    ['label' => 'Link in level 2', 'url' => ['#']],
                    ['label' => 'Link in level 2', 'url' => ['#']],
                ]],
                
                ['label' => 'Yii2 Menu', 'options' => ['class' => 'header']],
                ['label' => 'Home', 'icon' => 'home', 'url' => Yii::$app->homeUrl],
                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ['label' => 'Level One', 'icon' => 'share', 'url' => '#', 'items' => [
                    ['label' => 'Level Two', 'url' => '#', 'items' => [
                        ['label' => 'Level Three', 'url' => '#'],
                        ['label' => 'Level Three', 'url' => '#'],
                    ]],
                    ['label' => 'Level Two', 'url' => '#', 'items' => [
                        ['label' => 'Level Three', 'url' => '#'],
                        ['label' => 'Level Three', 'url' => '#'],
                    ]],
                ]],
            ],
        ]) ?>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>