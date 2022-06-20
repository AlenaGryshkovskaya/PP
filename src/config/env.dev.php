<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

defined('YII_DEBUG') or define('YII_DEBUG', true);

$bundles = is_file(__DIR__ . '/' . 'assets-prod.php') ? require(__DIR__ . '/' . 'assets-prod.php') : [];

return [
    'bootstrap' => ['log'/*, 'debug', 'gii'*/],
    'components' => [
        'assetManager' => [
            //'bundles' => $bundles,
            'appendTimestamp' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 5 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'/*, 'info', 'trace'*/],
                ],
            ],
        ],
        'mailer' => [
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        /*'db' => [
            'enableSchemaCache' => false,
            'enableQueryCache' => false,
        ],*/
    ],
    /*'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['*']
        ],
         'gii' => [
            'class' => yii\gii\Module::class,
        ],
    ],*/
    // custom params
    'params' => [],

];
