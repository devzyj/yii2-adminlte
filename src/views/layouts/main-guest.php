<?php
/**
 * @link https://github.com/devzyj/yii2-adminlte
 * @copyright Copyright (c) 2019 Zhang Yan Jiong
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
use devzyj\yii2\adminlte\web\BasicAdminLteAsset;

/* @var $this \yii\web\View */
/* @var $content string */

// 注册资源文件。
BasicAdminLteAsset::register($this);

// 注册 Style。
$this->registerCss('
.guest-page {
    background: #ECF0F5;
}
');
?>
<?php $this->beginContent('@devzyj/yii2/adminlte/views/layouts/basic.php'); ?>
<body class="hold-transition guest-page">
<?php $this->beginBody() ?>
    <?= $content ?>
<?php $this->endBody() ?>
</body>
<?php $this->endContent(); ?>