<?php

return [
    // тест брокер из песочницы
    'broker.context' => 'BROKER_CONTEXT',
    'broker.serviceCast' => 'http://centtst389.taximaxim.local/ServiceCast.xml',
    'broker.serviceType' => 'servicetest',

    'cas' => [
        'host' => 'dev-cas.taxsee.com',
        'port' => 443,
        'uri' => '',
    ],

    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'pgsql:host=db;dbname=test',
        'username' => 'postgres',
        'password' => 'postgres',
        'charset' => 'utf8',
        'tablePrefix' => 'tests_',
    ],

    'request.cookieValidationKey' => 'test',
];
