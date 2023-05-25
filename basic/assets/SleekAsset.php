<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class SleekAsset extends AssetBundle
{
    public $basePath = "@webroot";

    public $baseUrl = "@web";

    public $css = [
        'dist/assets/plugins/nprogress/nprogress.css',
        'dist/assets/plugins/daterangepicker/daterangepicker.css',
        'dist/assets/plugins/toastr/toastr.min.css',
        'dist/assets/css/sleek.css',
        'dist/assets/plugins/select2/css/select2.css',
        //谷歌的字体
        'https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500',
        'https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css',
    ];

    public $js = [
        'dist/assets/plugins/nprogress/nprogress.js',
        'dist/assets/plugins/jquery/jquery.min.js',
        'dist/assets/plugins/slimscrollbar/jquery.slimscroll.js',
        'dist/assets/plugins/daterangepicker/moment.min.js',
        'dist/assets/plugins/daterangepicker/daterangepicker.js',
        'dist/assets/plugins/toastr/toastr.min.js',
        'dist/assets/js/sleek.bundle.js',
        'dist/assets/plugins/charts/Chart.min.js',
        'dist/assets/plugins/select2/js/select2.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}