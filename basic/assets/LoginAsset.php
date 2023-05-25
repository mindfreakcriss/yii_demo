<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class LoginAsset extends AssetBundle
{
    public $basePath = "@webroot";

    public $css = [
        'dist/assets/plugins/nprogress/nprogress.css',
        'dist/assets/css/sleek.css',
        //谷歌的字体
        'https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500',
        'https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css',
    ];

    public $js = [
        'dist/assets/plugins/nprogress/nprogress.js',
        'dist/assets/plugins/jquery/jquery.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];

}