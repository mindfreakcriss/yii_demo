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
        'dist/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css',
        'dist/assets/plugins/daterangepicker/daterangepicker.css',
        'dist/assets/plugins/toastr/toastr.min.css',
        'dist/assets/css/sleek.css',
        'dist/assets/plugins/select2/css/select2.css',
        //谷歌的字体
        'https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500',
        'https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css',



     //   'dist/assets/css/sleek.min.rtl.css',
     //   'dist/assets/css/sleek.rtl.css',
     //   'dist/assets/css/styles.css',




    ];

    public $js = [
        'dist/assets/plugins/nprogress/nprogress.js',
        'dist/assets/plugins/jquery/jquery.min.js',
        'dist/assets/plugins/slimscrollbar/jquery.slimscroll.js',
        'dist/assets/plugins/jekyll-search.min.js',
        'dist/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js',
        'dist/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js',
        'dist/assets/plugins/daterangepicker/moment.min.js',
        'dist/assets/plugins/daterangepicker/daterangepicker.js',
        'dist/assets/plugins/toastr/toastr.min.js',
        'dist/assets/js/sleek.bundle.js',

        'dist/assets/js/chart.js',
        'dist/assets/js/map.js',
        'dist/assets/js/custom.js',
        'dist/assets/js/date-range.js',
        'dist/assets/app/app.calendar.js',
        'dist/assets/plugins/charts/Chart.min.js',
        'dist/assets/plugins/slimscrollbar/jquery.slimscroll.min.js',
        'dist/assets/plugins/charts/Chart.min.js',
        'dist/assets/js/sleek.js',
        'dist/assets/js/sleek.bundle.js',

        'dist/assets/plugins/select2/js/select2.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}