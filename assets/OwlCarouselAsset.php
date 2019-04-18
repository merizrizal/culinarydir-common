<?php

namespace common\assets;

use yii\web\AssetBundle;

class OwlCarouselAsset extends AssetBundle {
    
    public $sourcePath = '@bower/owl.carousel';
    
    public $css = [
        'dist/assets/owl.carousel.min.css',
        'dist/assets/owl.theme.default.min.css',
    ];
    public $js = [
        'dist/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
