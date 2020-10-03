<?php

namespace common\models;

use \common\models\base\Group as BaseGroup;

/**
 * This is the model class for table "p2m_group".
 */
class Group extends BaseGroup
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return array_replace_recursive(parent::rules(),
		[
			[['category_id', 'name', 'title'], 'required'],
			[['category_id'], 'integer'],
			[['name', 'title'], 'string', 'max' => 32],
			[['hide'], 'string', 'max' => 1],
			[['name'], 'unique'],
			[['lock'], 'default', 'value' => '0'],
			[['lock'], 'mootensai\components\OptimisticLockValidator']
		]);
	}

}
