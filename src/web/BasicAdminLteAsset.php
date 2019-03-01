<?php
/**
 * @link https://github.com/devzyj/yii2-adminlte
 * @copyright Copyright (c) 2019 Zhang Yan Jiong
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace devzyj\yii2\adminlte\web;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * BasicAdminLteAsset 基础的资源包，适用于未登录的页面。
 * 
 * @author ZhangYanJiong <zhangyanjiong@163.com>
 * @since 1.0
 */
class BasicAdminLteAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        // CSS 文件。
        if (empty($this->css)) {
            $this->css[] = YII_ENV_DEV ? 'css/AdminLTE.css' : 'css/AdminLTE.min.css';
        }
        
        // JS 文件。
        if (empty($this->js)) {
            $this->js[] = [
                'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',
                'condition' => 'lt IE 9',
                'position' => View::POS_HEAD,
            ];
            $this->js[] = [
                'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
                'condition' => 'lt IE 9',
                'position' => View::POS_HEAD,
            ];
        }
    
        parent::init();
    }
}
