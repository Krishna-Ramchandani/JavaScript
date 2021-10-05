<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QuestionsDemo;

/**
 * SearchQuestions represents the model behind the search form of `app\models\QuestionsDemo`.
 */
class SearchQuestions extends QuestionsDemo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'test_id', 'marks'], 'integer'],
            [['question', 'image', 'option_a', 'option_b', 'option_c', 'option_d', 'answer'], 'safe'],
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
        $query = QuestionsDemo::find();

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
            'question_id' => $this->question_id,
            'test_id' => $this->test_id,
            'marks' => $this->marks,
        ]);

        $query->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'option_a', $this->option_a])
            ->andFilterWhere(['like', 'option_b', $this->option_b])
            ->andFilterWhere(['like', 'option_c', $this->option_c])
            ->andFilterWhere(['like', 'option_d', $this->option_d])
            ->andFilterWhere(['like', 'answer', $this->answer]);

        return $dataProvider;
    }
}
