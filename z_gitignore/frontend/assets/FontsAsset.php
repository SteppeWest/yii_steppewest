<?php
/**
 * FontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-a6e
 * @license MIT
 */

/**
 * Load this asset with...
 * frontend\assets\FontsAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'frontend\assets\FontsAsset',
 */

namespace frontend\assets;

class FontsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '0.0.0';

	protected $resourceData = array(

		'static' => [
			'baseUrl' => 'https://fonts.googleapis.com',
			'css' => [
				'css?family=Lora:400,700,400italic,700italic',
				'css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
			],
		],

		'depends' => [
			'p2m\assets\P2CoreAsset',
			'rmrevin\yii\fontawesome\CdnFreeAssetBundle',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

// rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);
