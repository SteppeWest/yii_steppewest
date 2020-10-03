<?php

namespace common\models;

use \common\models\base\Link as BaseLink;

/**
 * This is the model class for table "p2m_link".
 */
class Link extends BaseLink
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return array_replace_recursive(parent::rules(),
		[
			[['subgroup_id', 'title', 'link'], 'required'],
			[['subgroup_id'], 'integer'],
			[['name'], 'string', 'max' => 32],
			[['title'], 'string', 'max' => 64],
			[['link'], 'string', 'max' => 255],
			[['https', 'hide'], 'string', 'max' => 1],
			[['lock'], 'default', 'value' => '0'],
			[['lock'], 'mootensai\components\OptimisticLockValidator']
		]);
	}

	public function getFullLink()
	{
		$url = ($this->https ? 'https' : 'http') . '://' . $this->link;
		$options = [
			'target' => '_blank',
		];
		return \yii\bootstrap4\Html::a($this->title, $url, $options);
	}
}
