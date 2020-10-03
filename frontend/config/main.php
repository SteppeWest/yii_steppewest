<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'yii-development-frontend',
	'name' => 'Yii Development',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'frontend\controllers',
	'bootstrap' => ['log'],
	'modules' => [],
	'components' => [
		'request' => [
			'csrfParam' => '_csrf-frontend',
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
		],
		'view' => [
			'theme' => [
				'basePath' => '@vendor/p2m/yii2-p2y2-things-demo/views',
				'baseUrl' => '@vendor/p2m/yii2-p2y2-things-demo/views',
				'pathMap' => [
					'@frontend/views' => '@vendor/p2m/yii2-p2y2-things-demo/views',
				],
			],
		],
		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'assetManager' => [
			'basePath' => '@assets/web/frontend/pub',
			'baseUrl' => '@assetsUrl/frontend/pub',
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
			'errorAction' => 'site/error',
		],
	],
	'params' => $params,
];
