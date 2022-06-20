<?php

$params = require __DIR__ . '/params.php';
$secret = require __DIR__ . '/secret.test.php';

return [
    'id' => 'yii2-boilerplate-test',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@tests' => '@app/tests',
        '@webroot' => '@app/web',
        '@web' => '/',
    ],
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'timeZone' => 'UTC',
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
            'appendTimestamp' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => 5,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'transport' => [
                'dsn' => 'native://default',
            ],
            'useFileTransport' => true,
        ],
        'request' => [
            'cookieValidationKey' => $secret['request.cookieValidationKey'],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'suffix' => '/',
            'rules' => require(__DIR__ . '/url-rules.php'),
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer',
                'collapseSlashes' => true,
                'normalizeTrailingSlash' => true,
            ],
        ],
        /*'db' => array_merge([
            'class' => \yii\db\Connection::class,
            'charset' => 'utf8',
            'enableLogging' => false,
            'enableProfiling' => false,
            'enableQueryCache' => false,
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ], $secret['db']),*/
    ],
    'params' => $params,
];
