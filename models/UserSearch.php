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
 * Class UserSearch
 * @package app\models
 */
class UserSearch extends User
{
	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			[['id'], 'integer'],
			[['phonenumber','firstname', 'lastname', 'role', 'email', 'investment_type', 'status', 'created_at', 'updated_at'], 'safe'],
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
		$query = User::find();

		// $query = User::find()->where(['id' => Yii::$app->user->uuid]);

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
			'id' => $this->id,
			'updated_at' => $this->updated_at,
		]);

		$query->andFilterWhere(['like', 'phonenumber', $this->phonenumber])
			  ->andFilterWhere(['like', 'firstname', $this->firstname])
		      ->andFilterWhere(['like', 'lastname', $this->lastname])
			  ->andFilterWhere(['like', 'role', $this->role])
			  ->andFilterWhere(['like', 'investment_type', $this->investment_type])
		      ->andFilterWhere(['like', 'email', $this->email])
		      ->andFilterWhere(['like', 'created_at', $this->created_at]);
		return $dataProvider;
	}
}
