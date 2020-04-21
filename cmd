#!/usr/bin/env php
<?php

date_default_timezone_set("UTC");

if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
} else {
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_ENV') or define('YII_ENV', 'prod');
}

echo phpversion();
// fcgi doesn't have STDIN and STDOUT defined by default
defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));
defined('STDOUT') or define('STDOUT', fopen('php://stdout', 'w'));
defined('COMMON_PATH') or define('COMMON_PATH', __DIR__ . '/../common');

require(COMMON_PATH . '/vendor/autoload.php');
require(COMMON_PATH . '/vendor/yiisoft/yii2/Yii.php');



Yii::$classMap['panix\engine\controllers\AdminController'] = COMMON_PATH.'/components/controllers/AdminController.php';
Yii::$classMap['panix\engine\controllers\CommonController'] = COMMON_PATH.'/components/controllers/CommonController.php';


$config = yii\helpers\ArrayHelper::merge(
    require COMMON_PATH . '/config/common.php',
   // require COMMON_PATH . '/config/web.php',
    //require __DIR__ . '/config/web.php',
	require __DIR__ . '/config/console.php'
);

$application = new panix\engine\console\Application($config);
//$application = new \yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);
