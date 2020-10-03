<?php

namespace common\models;

use Yii;
use \common\models\base\Subgroup as BaseSubgroup;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "p2m_subgroup".
 */
class Subgroup extends BaseSubgroup
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
	}
}
