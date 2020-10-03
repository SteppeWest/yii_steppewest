<?php
/**
 * BareAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-a6e
 * @license MIT
 */

/**
 * Load this asset with...
 * frontend\assets\BareAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'frontend\assets\BareAsset',
 */

namespace frontend\assets;

use yii\web\AssetBundle;

class BareAsset extends AssetBundle
{
	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
