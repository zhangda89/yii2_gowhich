<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/bootstrap-material-design.min.css',
        'css/ripples.min.css',
        'css/styles.css?v=2',
    ];
    public $js = [
        'js/material.min.js',
        'js/ripples.min.js',
        'js/custom.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'app\assets\FontAwesomeAsset',
        'app\assets\TimeagoAsset',
    ];
}
