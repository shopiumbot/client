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
            'migrationPath' => ['@core/migrations'],
        ]
    ],
    'components' => [
        'user' => [
            'class' => 'yii\web\User',
			'enableSession'=>false
            //'identityClass' => 'app\models\User',
            //'enableAutoLogin' => true,
        ],
        'session' => [ // for use session in console application
            'class' => 'yii\web\Session'
        ],
        'db' => require_once('_db.php'),
    ],
    'params' => yii\helpers\ArrayHelper::merge([
        'plan_id' => 2,
		'client_id' => 2,
    ],require(COMMON_PATH . '/config/params.php')),
];

return $config;

