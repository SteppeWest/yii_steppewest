<?php

namespace common\models;

use \common\models\base\Category as BaseCategory;

/**
 * This is the model class for table "p2m_category".
 */
class Category extends BaseCategory
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return array_replace_recursive(parent::rules(),
		[
			[['name'], 'required'],
			[['name', 'title'], 'string', 'max' => 32],
			[['hide'], 'string', 'max' => 1],
			[['name'], 'unique'],
			[['lock'], 'default', 'value' => '0'],
			[['lock'], 'mootensai\components\OptimisticLockValidator']
		]);
	}

}
