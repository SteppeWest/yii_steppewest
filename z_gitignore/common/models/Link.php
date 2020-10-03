<?php

namespace common\models;

use Yii;
use \common\models\base\Link as BaseLink;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "p2m_link".
 */
class Link extends BaseLink
{
	use \mootensai\relation\RelationTrait;

	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				# custom behaviors
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				# custom validation rules
			]
		);

		/*
		return array_replace_recursive(parent::rules(),
		[
			[['subgroup_id', 'title', 'link'], 'required'],
			[['subgroup_id'], 'integer'],
			[['name'], 'string', 'max' => 32],
			[['title'], 'string', 'max' => 64],
			[['link'], 'string', 'max' => 255],
			[['https', 'hide'], 'string', 'max' => 1],
		]);
		*/
	}

	public function attributeLabels()
	{
		return ArrayHelper::merge(
			parent::attributeLabels(),
			[
				'https' => 'https',
			]
		);
		return [
		];
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
