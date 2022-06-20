<?php

$secret = require __DIR__ . '/secret.test.php';

error_reporting(E_ALL);
ini_set('display_errors', true);

defined('YII_DEBUG') or define('YII_DEBUG', true);

return [
    'bootstrap' => ['log'],
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'request' => [
            'cookieValidationKey' => $secret['request.cookieValidationKey'],
        ],
    ],
];
