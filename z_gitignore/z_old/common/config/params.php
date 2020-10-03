<?php
return [
	'adminEmail' => 'admin@example.com',
	'supportEmail' => 'support@example.com',
	'user.passwordResetTokenExpire' => 3600,

	'p2m' => [
		'assets' => [
			'useStatic' => true, // false or not set to use published assets
			'staticEnd' => [
				'basePath' => '@assets',
				'baseUrl' => '@assetsUrl',
			],
		],
		'reverseDomain' => 'localhost.pedro.steppewest', // customise for your host configuration
	],

	'bsVersion' => '4.x',
];
