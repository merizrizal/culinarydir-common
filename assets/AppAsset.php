<?php

namespace common\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle {

    public $sourcePath = '@common/web';

    public $css = [
        'plugins/fontawesome/css/all.min.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
