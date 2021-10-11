<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Api;

/**
 * SearchApi represents the model behind the search form of `app\models\Api`.
 */
class SearchApi extends Api
{
    /**
     * {@inheritdoc}
     */

     public $search_api;
    public function rules()
    {
        return [
            [['id', 'project_id', 'module_id'], 'integer'],
            [['url', 'title', 'description', 'method', 'request', 'response','search_api'], 'safe'],
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
        $query = Api::find();

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
            'id' => $this->search_api,
            'project_id' => $this->search_api,
            'module_id' => $this->search_api,
        ]);

        $query->orFilterWhere(['like', 'url', $this->search_api])
            ->orFilterWhere(['like', 'title', $this->search_api])
            ->orFilterWhere(['like', 'description', $this->search_api])
            ->orFilterWhere(['like', 'method', $this->search_api])
            ->orFilterWhere(['like', 'request', $this->search_api])
            ->orFilterWhere(['like', 'response', $this->search_api]);

        return $dataProvider;
    }
}
