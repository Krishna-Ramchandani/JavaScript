<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Module;

/**
 * SearchModule represents the model behind the search form of `app\models\Module`.
 */
class SearchModule extends Module
{
    /**
     * {@inheritdoc}
     */
    public $search_module;
    public function rules()
    {
        return [
            [['id', 'project_id'], 'integer'],
            [['title', 'description','search_module'], 'safe'],
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
        $query = Module::find();

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
            'id' => $this->search_module,
            'project_id' => $this->search_module,
        ]);

        $query->orFilterWhere(['like', 'title', $this->search_module])
            ->orFilterWhere(['like', 'description', $this->search_module])
            ->orFilterWhere(['like', 'project_id', $this->search_module]);

        return $dataProvider;
    }
}
