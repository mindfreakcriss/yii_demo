<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class MonoAsset extends AssetBundle
{
    public $basePath = "@webroot";

    public $baseUrl = "@web";

    public $css = [
        'theme/css/style.css',
        'css/site.css',
        'theme/plugins/material/css/materialdesignicons.min.css',
        'theme/plugins/simplebar/simplebar.css',
        'theme/plugins/nprogress/nprogress.css',
        'theme/plugins/prism/prism.css'
    ];

    public $js = [
        'theme/js/map.js',
        'theme/js/calendar.js',
        'theme/js/custom.js',
        'theme/js/map.js',
        'theme/js/mono.js',
        'theme/plugins/nprogress/nprogress.js',
        'theme/plugins/simplebar/simplebar.min.js',
        'theme/plugins/prism/prism.js',
        'https://unpkg.com/hotkeys-js/dist/hotkeys.min.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}