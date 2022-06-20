<?php

return [
    'broker.context' => 'BROKER_CONTEXT',
    'broker.serviceCast' => 'https://services.taxsee.ru/ServiceCast.xml',
    'broker.serviceType' => 'servicedev',

    'cas' => [
        'host' => 'dev-cas.taxsee.com',
        'port' => 443,
        'uri' => '',
    ],

    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=localhost;dbname=DATABASE',
        'username' => '',
        'password' => '',
        'charset' => 'utf8',
        'tablePrefix' => 'tests_',
    ],

    'request.cookieValidationKey' => 'test',
];
