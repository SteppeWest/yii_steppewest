<?php

namespace common\models;

use \common\models\base\Subgroup as BaseSubgroup;

/**
 * This is the model class for table "p2m_subgroup".
 */
class Subgroup extends BaseSubgroup
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return array_replace_recursive(parent::rules(),
		[
			[['group_id', 'name', 'title'], 'required'],
			[['group_id'], 'integer'],
			[['name', 'title'], 'string', 'max' => 32],
			[['hide'], 'string', 'max' => 1],
			[['name'], 'unique'],
			[['lock'], 'default', 'value' => '0'],
			[['lock'], 'mootensai\components\OptimisticLockValidator']
		]);
	}

}
