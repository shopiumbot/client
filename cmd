#!/usr/bin/env php
<?php

date_default_timezone_set("UTC");

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

//defined('YII_DEBUG') or define('YII_DEBUG', false);
//defined('YII_ENV') or define('YII_ENV', 'prod');


echo phpversion();


// fcgi doesn't have STDIN and STDOUT defined by default
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('STDOUT') or define('STDOUT', fopen('php://stdout', 'w'));
defined('COMMON_PATH') or define('COMMON_PATH', __DIR__ . '/../common-dev');

require(COMMON_PATH . '/vendor/autoload.php');
require(COMMON_PATH . '/vendor/yiisoft/yii2/Yii.php');



Yii::$classMap['panix\engine\grid\columns\ActionColumn'] = COMMON_PATH.'/components/ActionColumn.php';
Yii::$classMap['panix\mod\admin\widgets\sidebar\BackendNav'] = COMMON_PATH.'/vendor/shopium/mod-admin/widgets/sidebar/BackendNav.php';

$config = yii\helpers\ArrayHelper::merge(
	require COMMON_PATH . '/config/common.php',
	require __DIR__ . '/config/console.php'
);

//print_r($config);die;

$application = new panix\engine\console\Application($config);
//$application = new \yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);
