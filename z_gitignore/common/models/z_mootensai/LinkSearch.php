<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Link;

/**
 * common\models\LinkSearch represents the model behind the search form about `common\models\Link`.
 */
 class LinkSearch extends Link
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['link_id', 'subgroup_id'], 'integer'],
			[['name', 'title', 'link', 'https', 'hide'], 'safe'],
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
		$query = Link::find();

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
			'link_id' => $this->link_id,
			'subgroup_id' => $this->subgroup_id,
		]);

		$query->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'title', $this->title])
			->andFilterWhere(['like', 'link', $this->link])
			->andFilterWhere(['like', 'https', $this->https])
			->andFilterWhere(['like', 'hide', $this->hide]);

		return $dataProvider;
	}
}
