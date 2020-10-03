<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Subgroup;

/**
 * SubgroupSearch represents the model behind the search form of `common\models\Subgroup`.
 */
class SubgroupSearch extends Subgroup
{
	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['subgroup_id', 'group_id', 'hide'], 'integer'],
			[['name', 'title'], 'safe'],
		];
	}

	/**
	 * {@inheritdoc}
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

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'subgroup_id' => $this->subgroup_id,
			'group_id' => $this->group_id,
			'hide' => $this->hide,
		]);

		$query->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'title', $this->title]);

		return $dataProvider;
	}
}
