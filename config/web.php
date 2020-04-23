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
            'dsn' => 'mysql:host=localhost;dbname=',
            'username' => '',
            'password' => '',
            'tablePrefix' => 'prefix_',
			'charset' =>'utf8'
        ],
        'request' => [
            'cookieValidationKey' => 'fpsiKaSs1Mcb6zwlsUZwuhqScBs5UgPQ',
        ],
        'view' => [
            'theme' => [
				'basePath'=>'@core/web/themes',
                'name' => 'basic'
            ],
        ],
    ],
    'params' => yii\helpers\ArrayHelper::merge([
        'plan_id' => 2,
    ],require(COMMON_PATH . '/config/params.php')),
];

return $config;

