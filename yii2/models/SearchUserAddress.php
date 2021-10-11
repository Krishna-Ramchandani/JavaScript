<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserAddress;

/**
 * SearchUserAddress represents the model behind the search form of `app\models\UserAddress`.
 */
class SearchUserAddress extends UserAddress
{
    /**
     * {@inheritdoc}
     */

     public $search_address;
    public function rules()
    {
        return [
            [[  'search_address' ], 'safe'],
            [[  'id','user_id'], 'integer'],
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
        $query = UserAddress::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pageSize'=>3,
            ],
            'sort'=>false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->orFilterWhere([
            'id' => $this->search_address,
            'user_id' => $this->search_address,
        ]);

        $query->orFilterWhere(['like', 'id', $this->search_address])
             ->orFilterWhere(['like', 'addressline', $this->search_address])
            ->orFilterWhere(['like', 'city', $this->search_address])
            ->orFilterWhere(['like', 'state', $this->search_address])
            ->orFilterWhere(['like', 'country', $this->search_address]);

        return $dataProvider;
    }
}
