<?php

Yii::setAlias('@webroot', __DIR__ . '/../web');
Yii::setAlias('@web', '/');

return [
    'jsCompressor' => 'java -jar build/tools/compiler.jar --js {from} --js_output_file {to}',
    'cssCompressor' => 'java -jar build/tools/yuicompressor.jar --type css {from} -o {to}',
    'bundles' => [
        'app\assets\AppAsset',
    ],
    'targets' => [
        'all' => [
            'class' => 'yii\web\AssetBundle',
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets',
            'js' => 'all-{hash}.js',
            'css' => 'all-{hash}.css',
        ],
    ],
    'assetManager' => [
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
    ],
];
