<?php

$config = [
    'id' => 'client',
    'vendorPath' => COMMON_PATH . '/vendor',
    'basePath' => dirname(__DIR__),
    'runtimePath' => dirname(__DIR__).'/runtime',
    'aliases' => [
        '@core' => COMMON_PATH,
		'@uploads' => dirname(__DIR__).'/web/uploads',
		'@runtime' => dirname(__DIR__).'/runtime',
    ],
    'components' => [
        'db' => require_once('_db.php'),
        'request' => [
            'cookieValidationKey' => 'm38y535nygo8wytowertg78gm4wt',
        ],

    ],
    'params' => yii\helpers\ArrayHelper::merge([
        'plan_id' => 2,
		'client_id' => 2,
    ],require(COMMON_PATH . '/config/params.php')),
];

return $config;

