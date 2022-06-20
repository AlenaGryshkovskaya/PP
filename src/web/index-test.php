<?php

$envConfig = require __DIR__ . "/../config/env.test.php";

defined('YII_ENV') or define('YII_ENV', 'test');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = \yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../config/test.php'),
    $envConfig
);

(new yii\web\Application($config))->run();
