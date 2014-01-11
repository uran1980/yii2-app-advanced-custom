<?php
// @see https://github.com/yiisoft/yii2/blob/master/docs/guide/configuration.md
$rootDir = dirname(dirname(__DIR__));

$params = array_merge(
	require($rootDir . '/common/config/params.php'),
	require($rootDir . '/common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

$options = [
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'vendorPath' => $rootDir . '/vendor',
	'controllerNamespace' => 'frontend\modules\frontend\controllers',
	'controller' => '@frontend\modules\frontend\SiteController',
	'defaultRoute' => 'site',
	'layout' => '@frontend/layouts/main.php',
	'modules' => [
		'gii' => $params['modules.gii'],
		'frontend' => [
			'class' => 'frontend\modules\frontend\Module',
		],
		'profile' => [
			'class' => 'frontend\modules\profile\Module',
		],
	],
	'extensions' => require($rootDir . '/vendor/yiisoft/extensions.php'),
	'components' => [
		'db' => $params['components.db'],
		'cache' => $params['components.cache'],
		'mail' => $params['components.mail'],
		'urlManager' => $params['components.urlManager'],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'frontend/site/error',
		],
	],
	'params' => $params,
];

if ( YII_ENV == 'dev' ) {
	$options['preload'] = ['debug', 'log'];
	$options['modules']['debug'] = $params['modules.debug'];
} else {
	$options['preload'] = ['log'];
}

return $options;
