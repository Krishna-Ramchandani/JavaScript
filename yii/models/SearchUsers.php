<?php
namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;
class SearchUsers extends Users
{
    public $search_users;
    public function rules()
    {
        return [
            
            [['search_users'], 'safe'],
            [['id'], 'integer'],
        ];
    }
 
    public function scenarios()
    {
        return Model::scenarios();
    }
  
    public function search($params)
    {
        $query = Users::find();
        $this->load($params);
        

        $this->load($params);

        

      
        $query->andFilterWhere([
            'id' => $this->id,
            // 'name' => $this->name,
            // 'gender' => $this->gender,
            // 'email' => $this->email,
        ]);

        $query->orFilterWhere(['like', 'id', $this->search_users])
            ->orFilterWhere(['like', 'name', $this->search_users])
            ->orFilterWhere(['like', 'gender', $this->search_users])
            ->orFilterWhere(['like', 'email', $this->search_users]);
        
        $dataProvider = new ActiveDataProvider([
               'query' => $query,
        ]);

        if (!$this->validate()) {
           
        return $dataProvider;
            }

        return $dataProvider;
    
           
    }
}
