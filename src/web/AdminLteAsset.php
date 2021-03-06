<?php
/**
 * @link https://github.com/devzyj/yii2-adminlte
 * @copyright Copyright (c) 2019 Zhang Yan Jiong
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace devzyj\yii2\adminlte\web;

use yii\web\AssetBundle;
use yii\base\InvalidConfigException;

/**
 * AdminLteAsset class
 * 
 * 修改参数的使用方法如下：
 * ```php
 * [
 *     'components' => [
 *         'assetManager' => [
 *             'bundles' => [
 *                 'devzyj\yii2\adminlte\web\AdminLteAsset' => [
 *                     'skin' => 'skin-blue',
 *                     'layout' => 'sidebar-mini',
 *                 ]
 *             ]
 *         ]
 *     ]
 * ]
 * ```
 * 
 * @author ZhangYanJiong <zhangyanjiong@163.com>
 * @since 1.0
 */
class AdminLteAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'devzyj\yii2\adminlte\web\BasicAdminLteAsset',
    ];
    
    /**
     * @var string|false 选择皮肤。例如 `skin-blue` 或者设置 `false` 以禁用皮肤。
     * @see https://adminlte.io/docs/2.4/layout
     */
    public $skin = 'skin-blue';

    /**
     * @var string 选择布局。
     * @see https://adminlte.io/docs/2.4/layout
     */
    public $layout = 'sidebar-mini';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        // 附加皮肤 CSS 文件。
        if ($this->skin !== false) {
            if (($this->skin !== '_all-skins') && (strpos($this->skin, 'skin-') !== 0)) {
                throw new InvalidConfigException('Invalid skin specified');
            }
            
            $this->css[] = sprintf(YII_ENV_DEV ? 'css/skins/%s.css' : 'css/skins/%s.min.css', $this->skin);
        }

        // JS 文件。
        if (empty($this->js)) {
            $this->js[] = YII_ENV_DEV ? 'js/adminlte.js' : 'js/adminlte.min.js';
        }
        
        parent::init();
    }
}
