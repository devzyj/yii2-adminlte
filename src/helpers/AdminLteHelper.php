<?php
/**
 * @link https://github.com/devzyj/yii2-adminlte
 * @copyright Copyright (c) 2019 Zhang Yan Jiong
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace devzyj\yii2\adminlte\helpers;

use Yii;
use devzyj\yii2\adminlte\web\BasicAdminLteAsset;
use devzyj\yii2\adminlte\web\AdminLteAsset;

/**
 * AdminLteHelper 助手类。
 * 
 * @author ZhangYanJiong <zhangyanjiong@163.com>
 * @since 1.0
 */
class AdminLteHelper
{
    /**
     * 获取基础资源包。
     *
     * @return BasicAdminLteAsset
     */
    public static function getBasicAssetBundle()
    {
        return Yii::$app->getAssetManager()->getBundle(BasicAdminLteAsset::className());
    }
    
    /**
     * 获取资源包。
     * 
     * @return AdminLteAsset
     */
    public static function getAssetBundle()
    {
        return Yii::$app->getAssetManager()->getBundle(AdminLteAsset::className());
    }

    /**
     * 获取使用的皮肤名称。
     * 
     * @param string $default 默认皮肤。
     * @return string
     */
    public static function skinClass($default = 'skin-blue')
    {
        $bundle = static::getAssetBundle();
        if ($bundle->skin === false) {
            return '';
        } elseif ($bundle->skin != '_all-skins') {
            return $bundle->skin;
        }
        
        return $default;
    }
    
    /**
     * 获取使用的布局名称。
     * 
     * @return string
     */
    public static function layoutClass()
    {
        $bundle = static::getAssetBundle();
        return $bundle->layout;
    }
}
