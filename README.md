# yii2-adminlte

almasaeed2010/AdminLTE for Yii2.


## 兼容性

| yii2-adminlte | AdminLTE |
|---|---|
| 1.0 | 2.4 |


# 安装方式

通过 [composer](http://getcomposer.org/download/).

```json
"devzyj/yii2-adminlte" : "~1.0.0"
```


# 使用方法

安装完成后，如果需要预览效果，可以进行如下配置：

```php
// config.php
return [
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@devzyj/yii2/adminlte/views',
                ],
            ],
        ],
    ],
];
```


## 皮肤和布局

```php
// config.php
return [
    'components' => [
        'assetManager' => [
            'bundles' => [
                'devzyj\yii2\adminlte\web\AdminLteAsset' => [
                    'skin' => 'skin-blue',
                    'layout' => 'sidebar-mini',
                ],
            ],
        ],
    ],
];
```


## 资源包

```php
// AppAsset.php
class AppAsset extends \yii\web\AssetBundle
{
    public $css = [
        // 字体样式
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    
    public $depends = [
        'devzyj\yii2\adminlte\web\AdminLteAsset',
    ];
}
```

## 视图文件


1. 拷贝 `devzyj\yii2\adminlte\views\` 中的内容到 `app\views\` 中。
2. 修改 `layouts` 目录中的文件。把注册页面资源的代码换成 `AppAsset::register($this)`，并且调整嵌套布局使用的文件路径。
