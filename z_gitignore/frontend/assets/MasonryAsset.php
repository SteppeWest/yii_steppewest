<?php
/**
 * MasonryAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-a6e
 * @license MIT
 */

/**
 * Load this asset with...
 * frontend\assets\MasonryAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'frontend\assets\MasonryAsset',
 */

namespace frontend\assets;

use yii\web\AssetBundle;

class MasonryAsset extends AssetBundle
{
	public $sourcePath = '@frontend/assets/lib';

	public $css = [
		'css/masonry.css',
	];

	public $js = [
		'js/masonry.js',
	];

	public $depends = [
		'p2m\assets\MasonryAsset',
	];
}
