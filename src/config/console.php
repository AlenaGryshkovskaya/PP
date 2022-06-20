<?php

$params = require __DIR__ . '/params.php';
$secret = require __DIR__ . '/secret.php';

return [
    'id' => 'yii2-boilerplate-console',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@tests' => '@app/tests',
        '@webroot' => '@app/web',
        '@web' => '/',
    ],
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'components' => [
        'cache' => [
            // тот же кеш что и в web - чтобы сбрасывать при сборке - см. src/yii.in
            'class' => 'yii\caching\MemCache',
        ],
        'db' => $secret['db'],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];
