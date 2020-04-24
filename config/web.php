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
        'db' => [
            'dsn' => 'mysql:host=corner.mysql.tools;dbname=corner_bot',
            'username' => 'corner_bot',
            'password' => 'g09K*a+Jm1',
            'tablePrefix' => 'prefix_',
			//'charset' =>'utf8mb4'
        ],
        'request' => [
            'cookieValidationKey' => 'fpsiKaSs1Mcb6zwlsUZwuhqScBs5UgPQ',
        ],

    ],
    'params' => yii\helpers\ArrayHelper::merge([
        'plan_id' => 2,
    ],require(COMMON_PATH . '/config/params.php')),
];

return $config;

