<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Itemes;

/**
 * ItemesSearch represents the model behind the search form of `app\models\Itemes`.
 */
class ItemesSearch extends Itemes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdItem', 'IdFromShop'], 'integer'],
            [['DateRegist', 'DateExpiration', 'Quantity', 'Price', 'Description', 'Image', 'Categories', 'DedicatePers', 'PhoneNumber', 'StatusItem'], 'safe'],
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
        $query = Itemes::find();

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
            'IdItem' => $this->IdItem,
            'IdFromShop' => $this->IdFromShop,
        ]);

        $query->andFilterWhere(['like', 'DateRegist', $this->DateRegist])
            ->andFilterWhere(['like', 'DateExpiration', $this->DateExpiration])
            ->andFilterWhere(['like', 'Quantity', $this->Quantity])
            ->andFilterWhere(['like', 'Price', $this->Price])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Image', $this->Image])
            ->andFilterWhere(['like', 'Categories', $this->Categories])
            ->andFilterWhere(['like', 'DedicatePers', $this->DedicatePers])
            ->andFilterWhere(['like', 'PhoneNumber', $this->PhoneNumber])
            ->andFilterWhere(['like', 'StatusItem', $this->StatusItem]);

        return $dataProvider;
    }
}
