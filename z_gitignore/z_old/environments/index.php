<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *	 'environment name' => [
 *		 'path' => 'directory storing the local files',
 *		 'skipFiles'  => [
 *			 // list of files that should only copied once and skipped if they already exist
 *		 ],
 *		 'setWritable' => [
 *			 // list of directories that should be set writable
 *		 ],
 *		 'setExecutable' => [
 *			 // list of files that should be set executable
 *		 ],
 *		 'setCookieValidationKey' => [
 *			 // list of config files that need to be inserted with automatically generated cookie validation keys
 *		 ],
 *		 'createSymlink' => [
 *			 // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *		 ],
 *	 ],
 * ];
 * ```
 */
return [
	'Development' => [
		'path' => 'dev',
		'setWritable' => [
			'api/controllers',
			'api/models',
			'api/runtime',
			'api/views',
			'assets/controllers',
			'assets/models',
			'assets/runtime',
			'assets/views',
			'backend/controllers',
			'backend/models',
			'backend/runtime',
			'backend/views',
			'common/controllers',
			'common/models',
			'frontend/controllers',
			'frontend/models',
			'frontend/runtime',
			'frontend/views',
			'members/controllers',
			'members/models',
			'members/runtime',
			'members/views',
			'midend/controllers',
			'midend/models',
			'midend/runtime',
			'midend/views',
			'assets/web/api/pub',
			'assets/web/assets/pub',
			'assets/web/backend/pub',
			'assets/web/common/pub',
			'assets/web/frontend/pub',
			'assets/web/members/pub',
			'assets/web/midend/pub',
		],
		'setExecutable' => [
			'yii',
			'yii_test',
		],
		'setCookieValidationKey' => [
			'api/config/main-local.php',
			'assets/config/main-local.php',
			'backend/config/main-local.php',
			'frontend/config/main-local.php',
			'members/config/main-local.php',
			'midend/config/main-local.php',
		],
	],
	'Production' => [
		'path' => 'prod',
		'setWritable' => [
			'api/runtime',
			'assets/runtime',
			'backend/runtime',
			'frontend/runtime',
			'members/runtime',
			'midend/runtime',
			'assets/web/api/pub',
			'assets/web/assets/pub',
			'assets/web/backend/pub',
			'assets/web/common/pub',
			'assets/web/frontend/pub',
			'assets/web/members/pub',
			'assets/web/midend/pub',
		],
		'setExecutable' => [
			'yii',
		],
		'setCookieValidationKey' => [
			'api/config/main-local.php',
			'assets/config/main-local.php',
			'backend/config/main-local.php',
			'frontend/config/main-local.php',
			'members/config/main-local.php',
			'midend/config/main-local.php',
		],
	],
];
