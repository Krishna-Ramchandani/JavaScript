<?php
namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserAddress;
class SearchUserAddress extends UserAddress
{
    public $search_address;
    public function rules()
    {
        return [
            
            [['search_address'], 'safe'],
            [['id'], 'integer'],
        ];
    }
 
    public function scenarios()
    {
        return Model::scenarios();
    }
  
    public function search($params)
    {
        $query = UserAddress::find();
        $this->load($params);
        

        $this->load($params);

        

      
        $query->andFilterWhere([
            'id' => $this->id,
            // 'name' => $this->name,
            // 'gender' => $this->gender,
            // 'email' => $this->email,
        ]);

        $query->orFilterWhere(['like', 'id', $this->search_address])
            ->orFilterWhere(['like', 'addLine1', $this->search_address])
            ->orFilterWhere(['like', 'addLine2', $this->search_address])
            ->orFilterWhere(['like', 'city', $this->search_address])
            ->orFilterWhere(['like', 'state', $this->search_address])
            ->orFilterWhere(['like', 'pincode', $this->search_address])
            ->orFilterWhere(['like', 'country', $this->search_address])
            ;
        
        $dataProvider = new ActiveDataProvider([
               'query' => $query,
        ]);

        if (!$this->validate()) {
           
        return $dataProvider;
            }

        return $dataProvider;
    
           
    }
}
