<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.css',
        'css/magnific-popup.css',
        'css/line-icons.min.css',
        'css/style.css',
        'css/responsive.css',
        'https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800'
    ];


    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/jquery.easing.min.js',
        'js/jquery.magnific-popup.js',
        'js/owl.carousel.js',
        'js/validator.js',
        'js/contact.js',
        'js/wow.min.js',
        'js/main.js'



    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
