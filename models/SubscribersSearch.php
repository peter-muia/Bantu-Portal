<?php

/**
 *
 * @package    Material Dashboard Yii2
 * @author     CodersEden <hello@coderseden.com>
 * @link       https://www.coderseden.com
 * @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
 * @license    MIT - https://www.coderseden.com
 * @since      1.0
 */

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Class SubscribersSearch
 * @package app\models
 */
class SubscribersSearch extends Subscribers
{
	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			[['id'], 'integer'],
			[['phonenumber','email', 'status', 'created'], 'safe'],
		];
	}

	/**
	 * @return array
	 */
	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * @param $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params)
	{
		$query = Subscribers::find();

		// $query = Subscribers::find()->where(['id' => Yii::$app->Subscribers->uuid]);

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'sort' => [
				'defaultOrder' => [
					'created' => SORT_DESC,
				],
			],
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		

		$query->andFilterWhere(['like', 'phonenumber', $this->phonenumber])
			  ->andFilterWhere(['like', 'status', $this->status])
		      ->andFilterWhere(['like', 'email', $this->email])
		      ->andFilterWhere(['like', 'created', $this->created]);
		return $dataProvider;
	}
}
