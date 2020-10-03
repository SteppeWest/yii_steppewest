<?php
/**
 * HeroicFeaturesAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-a6e
 * @license MIT
 */

/**
 * Load this asset with...
 * frontend\assets\HeroicFeaturesAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'frontend\assets\HeroicFeaturesAsset',
 */

namespace frontend\assets;

class HeroicFeaturesAsset extends \p2m\assets\base\P2AssetBundle
{
	public $sourcePath = '@frontend/assets/lib';

	public $css = [
		'css' => [
			'css/heroic-features.min.css',
		],
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
		'rmrevin\yii\fontawesome\CdnFreeAssetBundle',
	];
}
