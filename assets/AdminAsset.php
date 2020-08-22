<?php


namespace app\assets;


use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
        public $basePath = '@webroot/adminlte/';
        public $baseUrl = '@web/adminlte/';
        public $css = [
            'bower_components/bootstrap/dist/css/bootstrap.min.css',
            'bower_components/font-awesome/css/font-awesome.min.css',
            'bower_components/Ionicons/css/ionicons.min.css',
            'dist/css/AdminLTE.min.css',
            'dist/css/skins/skin-blue.min.css',
            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        ];
        public $js = [
            'bower_components/bootstrap/dist/js/bootstrap.min.js',
            'dist/js/adminlte.min.js',
        ];
        public $depends = [
            'yii\web\YiiAsset',
        ];
}