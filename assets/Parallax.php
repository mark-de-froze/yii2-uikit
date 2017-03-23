<?php

namespace worstinme\uikit\assets;

use yii\web\AssetBundle;

class Parallax extends AssetBundle
{
    public $sourcePath = '@worstinme/uikit/uikit';

    public $css = [];

    public $js = [];

    public $depends = [
        'worstinme\uikit\UikitAsset',
    ];
}