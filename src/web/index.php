<?php

$environment = is_file(__DIR__ . '/../environment')
    ? trim(file_get_contents(__DIR__ . '/../environment'))
    : 'prod';

defined('YII_ENV') or define('YII_ENV', $environment);
defined('YII_ENV_PROD') or define('YII_ENV_PROD', strpos(YII_ENV, 'prod') !== false);
defined('YII_ENV_DEV') or define('YII_ENV_DEV', strpos(YII_ENV, 'prod') === false);
defined('YII_ENV_TEST') or define('YII_ENV_TEST', strpos(YII_ENV, 'test') !== false);

require(__DIR__ . '/../vendor/autoload.php');

$envConfig = is_file(__DIR__ . "/../config/env.{$environment}.php")
    ? require __DIR__ . "/../config/env.{$environment}.php"
    : [];

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = \yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../config/web.php'),
    $envConfig
);

(new yii\web\Application($config))->run();
