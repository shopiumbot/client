<?php

$config = [
    'id' => 'client',
    'vendorPath' => COMMON_PATH . '/vendor',
    'basePath' => dirname(__DIR__),
    'runtimePath' => '@app/runtime',
    'aliases' => [
        '@core' => COMMON_PATH,
		'@uploads' => dirname(__DIR__).'/web/uploads',
    ],
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=corner.mysql.tools;dbname=corner_bot',
            'username' => 'corner_bot',
            'password' => 'g09K*a+Jm1',
            'tablePrefix' => 'cms_',
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
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['modules']['debug']['class'] = 'yii\debug\Module';
    $config['modules']['debug']['traceLine'] = function ($options, $panel) {
        $filePath = $options['file'];
        return strtr('<a href="phpstorm://open?url={file}&line={line}">{file}:{line}</a>', ['{file}' => $filePath]);
    };
    $config['modules']['debug']['dataPath'] = dirname(__DIR__).'/../common/runtime/debug';
}

return $config;

