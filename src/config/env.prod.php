<?php

error_reporting(0);
ini_set('display_errors', false);

defined('YII_DEBUG') or define('YII_DEBUG', false);

$bundles = is_file(__DIR__ . '/' . 'assets-prod.php') ? require(__DIR__ . '/' . 'assets-prod.php') : [];

return [
    'components' => [
        'assetManager' => [
            'bundles' => $bundles,
            'appendTimestamp' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'technology\sentry\Target',
                    'dsn' => 'SENTRY_DSN',
                    'levels' => ['error', 'warning'/*, 'info', 'trace', 'profile'*/],
                    'context' => true,
                    'userIdentityFields' => ['phone', 'profile'],
                ],
            ],
        ],
        'mailer' => [
            'useFileTransport' => false,
        ],
    ],
];
