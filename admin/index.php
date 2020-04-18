<?php

error_reporting(E_ALL);
//Timezone
date_default_timezone_set("UTC");

// comment out the following two lines when deployed to production
if (in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1'])) {
    $env = 'dev';
    $debug = true;
} else {
    $env = 'prod';
    $debug = false;

}
$env = 'dev';
$debug = true;
defined('COMMON_PATH') or define('COMMON_PATH', __DIR__ . '/../../common');
defined('APP_PATH') or define('APP_PATH', dirname(__DIR__));
defined('YII_DEBUG') or define('YII_DEBUG', $debug);
defined('YII_ENV') or define('YII_ENV', $env);

require COMMON_PATH . '/vendor/autoload.php';
require COMMON_PATH . '/vendor/yiisoft/yii2/Yii.php';


$config = yii\helpers\ArrayHelper::merge(
    require COMMON_PATH . '/config/common.php',
    require COMMON_PATH . '/config/web.php',
    require __DIR__ . '/../config/web.php',
    require COMMON_PATH . '/config/admin.php'
    );


$app = new \panix\engine\WebApplication($config);
$app->run();