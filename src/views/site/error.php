<?php
/**
 * @link https://github.com/devzyj/yii2-application
 * @copyright Copyright (c) 2019 Zhang Yan Jiong
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
use yii\helpers\Html;
use yii\web\HttpException;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception \Exception */

// 页面标题。
$this->title = $name;

// 不显示内容头部标题。
$this->beginBlock('content-header');
$this->endBlock();

// 根据错误类型，确认图标颜色。
$color = $exception instanceof HttpException ? 'text-yellow' : 'text-red';
?>
<div class="error-page">
    <h2 class="headline"><i class="fa fa-warning <?= $color ?>"></i></h2>
    <div class="error-content">
        <h3><?= Html::encode($name) ?></h3>
        <p><?= nl2br(Html::encode($message)) ?></p>
        <p>
            <small>
                The above error occurred while the Web server was processing your request.
                Please contact us if you think this is a server error.
                Meanwhile, you may <?= Html::a('return to home', Yii::$app->getHomeUrl()) ?> or try using the search form.
            </small>
        </p>
        <form class="search-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i></button>
                </div>
            </div>
        <!-- /.input-group -->
        </form>
    </div>
<!-- /.error-content -->
</div>
<!-- /.error-page -->