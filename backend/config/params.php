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
//			''								=> 'backend/site/index',
//			'/home'							=> 'backend/site/index',
//			'/site/index'					=> 'backend/site/index',
//			'/site/about'					=> 'backend/site/about',
//			'/site/contact'					=> 'backend/site/contact',
//			'/site/signup'					=> 'backend/site/signup',
//			'/site/login'					=> 'backend/site/login',
//			'/site/logout'					=> 'backend/site/logout',
//			'/site/request-password-reset'	=> 'backend/site/request-password-reset',
//		],
	],
];
