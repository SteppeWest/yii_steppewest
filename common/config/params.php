<?php
return [
	'adminEmail' => 'pedro@steppewest.com',
	'supportEmail' => 'pedro@steppewest.com',
	'user.passwordResetTokenExpire' => 3600,

	'p2m' => [
		'assets' => [
			'useStatic' => true, // false or not set to use published assets
			'staticEnd' => [
				'basePath' => '@assets',
				'baseUrl' => '@assetsUrl',
			],
		],
		'reverseDomain' => 'dev.a6e-dev', // customise for your host configuration
/*
		'assets' => [
			'useStatic' => true, // false or not set to use published assets
			'staticEnd' => [
				'baseUrl' => '@assetsUrl',
				'basePath' => '@assetsPath',
			],
			//'bootswatchTheme' = 'cerulean', // set to _one_ of:
				// 'cerulean', 'cosmo', 'cyborg', 'darkly', 'flatly',
				// 'journal', 'litera', 'lumen', 'lux', 'materia', 'minty',
				// 'pulse', 'sandstone', 'simplex', 'sketchy', 'slate',
				// 'solar', 'spacelab', 'superhero', 'united', 'yeti',
		],
		'reverseDomain' => 'steppewest.development', // customise for your host configuration
 */
	],
];
?>
<?php
return [
	'p2m' => [
		'assets' => [
			'useStatic' => true, // false or not set to use published assets
			'staticEnd' => [
				'baseUrl' => '@assetsUrl',
				'basePath' => '@assetsPath',
			],
			//'bootswatchTheme' = 'cerulean', // set to _one_ of:
				// 'cerulean', 'cosmo', 'cyborg', 'darkly', 'flatly',
				// 'journal', 'litera', 'lumen', 'lux', 'materia', 'minty',
				// 'pulse', 'sandstone', 'simplex', 'sketchy', 'slate',
				// 'solar', 'spacelab', 'superhero', 'united', 'yeti',
		],
		'reverseDomain' => 'steppewest.development', // customise for your host configuration
	],
];
