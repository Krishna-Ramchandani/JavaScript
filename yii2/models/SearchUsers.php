<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * SearchUsers represents the model behind the search form of `app\models\Users`.
 */
class SearchUsers extends Users
{
    /**
     * {@inheritdoc}
     */
    public $search_users;
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'gender', 'email','search_users'], 'safe'],
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
        $query = Users::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pageSize'=>3,
                // 'class'=>'btn-primary',
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
            'id' => $this->search_users,
        ]);

        $query->orFilterWhere(['like', 'name', $this->search_users])
            ->orFilterWhere(['like', 'gender', $this->search_users])
            ->orFilterWhere(['like', 'email', $this->search_users]);

        return $dataProvider;
    }
}
