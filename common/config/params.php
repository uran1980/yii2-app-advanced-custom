<?php

Yii::setAlias('common',		realpath(__DIR__ . '/../'));
Yii::setAlias('frontend',	realpath(__DIR__ . '/../../frontend'));
Yii::setAlias('backend',	realpath(__DIR__ . '/../../backend'));
Yii::setAlias('console',	realpath(__DIR__ . '/../../console'));

$options = [
	'adminEmail' => 'admin@example.com',
	'supportEmail' => 'support@example.com',

	// ---------------------------- GII MODULE ---------------------------------
	// @see https://github.com/yiisoft/yii2/blob/master/docs/guide/gii.md
	'modules.gii' => [
		'class' => 'yii\gii\Module',
		'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*'],
	],

	// --------------------------- DEBUG MODULE --------------------------------
	// @see https://github.com/yiisoft/yii2/blob/master/docs/guide/debugger.md
	'modules.debug' => [
		'class' => 'yii\debug\Module',
	],

	// -------------------------- CACHE COMPONENT ------------------------------
	// @see https://github.com/yiisoft/yii2/blob/master/docs/guide/caching.md
	'components.cache' => [
		'class' => 'yii\caching\FileCache',
	],

	// ---------------------------- MAIL COMPONENT -----------------------------
	'components.mail' => [
		'class' => 'yii\swiftmailer\Mailer',
		'viewPath' => '@common/mails',
	],
];

return $options;
