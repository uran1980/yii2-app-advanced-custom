<?php
return [
	'adminEmail' => 'admin@example.com',

	// ----------------------- URL MANAGER COMPONENT ---------------------------
	// @see https://github.com/yiisoft/yii2/blob/master/docs/guide/url.md
	'components.urlManager' => [
		'class' => 'yii\web\UrlManager',
		'enablePrettyUrl' => true,
		'showScriptName' => false,												// false - means that index.php will not be part of the URLs
//		'rules' => [
//			''								=> 'frontend/site/index',
//			'/home'							=> 'frontend/site/index',
//			'/site/index'					=> 'frontend/site/index',
//			'/site/about'					=> 'frontend/site/about',
//			'/site/contact'					=> 'frontend/site/contact',
//			'/site/signup'					=> 'frontend/site/signup',
//			'/site/login'					=> 'frontend/site/login',
//			'/site/logout'					=> 'frontend/site/logout',
//			'/site/request-password-reset'	=> 'frontend/site/request-password-reset',
//		],
	],
];
