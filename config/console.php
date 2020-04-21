<?php

$config = [
    'id' => 'console',
    'vendorPath' => COMMON_PATH . '/vendor',
    'basePath' => COMMON_PATH,
    'runtimePath' => '@app/runtime',
    'aliases' => [
        '@core' => COMMON_PATH,
		'@uploads' => dirname(__DIR__).'/web/uploads',
		'@runtime' => dirname(__DIR__).'/runtime',
    ],
	'controllerMap' => [
        'migrate' => ['class' => 'panix\engine\console\controllers\MigrateController',
            'migrationPath' => ['@core/migrations', '@yii/rbac/migrations'],
        ]
    ],
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=corner.mysql.tools;dbname=corner_bot2',
            'username' => 'corner_bot2',
            'password' => 'k4-6H3ds_K',
            'tablePrefix' => 'prefix_',
        ],
    ],
    'params' => yii\helpers\ArrayHelper::merge([
        'plan_id' => 2,
    ],require(COMMON_PATH . '/config/params.php')),
];

return $config;

