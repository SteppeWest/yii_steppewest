<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Group;

/**
 * common\models\GroupSearch represents the model behind the search form about `common\models\Group`.
 */
 class GroupSearch extends Group
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['group_id', 'category_id'], 'integer'],
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
		$query = Group::find();

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
			'group_id' => $this->group_id,
			'category_id' => $this->category_id,
		]);

		$query->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'title', $this->title])
			->andFilterWhere(['like', 'hide', $this->hide]);

		return $dataProvider;
	}
}
