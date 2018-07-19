<?php

namespace common\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle {

    public $sourcePath = '@common/web';

    public $css = [
        'plugins/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
