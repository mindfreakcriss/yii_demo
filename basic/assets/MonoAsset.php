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
        'css/site.css'
    ];

    public $js = [
        'theme/js/map.js',
        'theme/js/calendar.js',
        'theme/js/custom.js',
        'theme/js/map.js',
        'theme/js/mono.js'
    ];

    public $jsOptions = [
        'position' => View::POS_END
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}