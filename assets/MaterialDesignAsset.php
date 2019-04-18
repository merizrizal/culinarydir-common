<?php

namespace common\assets;

use yii\web\AssetBundle;

class MaterialDesignAsset extends AssetBundle {
    
    public $sourcePath = '@npm/material-components-web';
    
    public $css = [
        'dist/material-components-web.min.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons'
    ];
    public $js = [
        'dist/material-components-web.min.js',
    ];
}
