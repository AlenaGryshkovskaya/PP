<?php

$params = require __DIR__ . '/params.php';
$secret = require __DIR__ . '/secret.php';

return [
    'id' => 'yii2-boilerplate',
    'version' => function () {
        return is_file(__DIR__ . '/../.release') ?
            file_get_contents(__DIR__ . '/../.release') :
            'unknown';
    },
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'timeZone' => 'UTC',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\MemCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
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
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
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
            'tablePrefix' => 't_',
            'enableLogging' => false,
            'enableProfiling' => false,
            'enableQueryCache' => false,
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ], $secret['db']),
        'i18n' => [
            'translations' => [
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@yii/messages'
                ],
                '*' => [
                    'class' => 'yii\i18n\GettextMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'ru-RU',
                    'useMoFile' => false,
                    'catalog' => 'messages',
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],*/
    ],
    'params' => $params,
];
