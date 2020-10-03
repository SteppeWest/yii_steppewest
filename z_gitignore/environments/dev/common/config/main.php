<?php
/*
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * #####                                                           #####
 * #####   Customise these lines to suit your host configuration   #####
 * #####                                                           #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */
$_urlBase = 'a6e-dev.dev';
$_urlBaseFrontend = 'http://'         . $_urlBase;
$_urlBaseBackend  = 'http://backend.' . $_urlBase;
$_urlBaseMembers  = 'http://members.' . $_urlBase;
$_urlBaseMidend   = 'http://midend.'  . $_urlBase;
$_urlBaseAssets   = 'http://static.'  . $_urlBase;
$_urlBaseApi      = 'http://api.'     . $_urlBase;

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		// NOTE: in the yii2-advanced-app, the user component should be updated in
		// 'frontend/config/main.php' and/or 'backend/config/main.php' (OR you can add it
		// to 'common/config' if you remove it from frontend/backend)
		/*
		'user' => [
		],
		*/
		'assetManager' => [
			//'appendTimestamp' => true, // useful while developing custom assets
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
			],
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'suffix' => '.p2m',
			'rules' => [
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
				'<view:[a-zA-Z0-9-]+>/'=>'site/page',
			]
		],
		'urlManagerFrontEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseFrontend,
		],
		'urlManagerBackEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseBackend,
		],
		'urlManagerMembers' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseMembers,
		],
		'urlManagerMidend' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseMidend,
		],
		'urlManagerAssets' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseAssets,
		],
		'urlManagerApi' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseApi,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];
