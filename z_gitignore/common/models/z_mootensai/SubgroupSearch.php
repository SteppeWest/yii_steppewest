<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Subgroup;

/**
 * common\models\SubgroupSearch represents the model behind the search form about `common\models\Subgroup`.
 */
 class SubgroupSearch extends Subgroup
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['subgroup_id', 'group_id'], 'integer'],
			[['name', 'title', 'hide'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params)
	{
		$query = Subgroup::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		$query->andFilterWhere([
			'subgroup_id' => $this->subgroup_id,
			'group_id' => $this->group_id,
		]);

		$query->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'title', $this->title])
			->andFilterWhere(['like', 'hide', $this->hide]);

		return $dataProvider;
	}
}
