<?php

$config = [
    'id' => 'console',
    'vendorPath' => COMMON_PATH . '/vendor',
    'basePath' => COMMON_PATH,
    'runtimePath' => '@app/runtime',
    'aliases' => [
        '@core' => COMMON_PATH,
    ],
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=bot',
            'username' => 'root',
            'password' => '',
            'tablePrefix' => 'cms_',
        ],
    ],
    'params' => yii\helpers\ArrayHelper::merge([
        'plan_id' => 2,
    ],require(COMMON_PATH . '/config/params.php')),
];

return $config;

