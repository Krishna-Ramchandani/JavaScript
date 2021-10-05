<?php
namespace app\models;
 
use Yii;
 
class Users extends \yii\db\ActiveRecord
{
     
    public static function tableName()
    {
        return 'users';
    }
     
    public static function getDb()
    {
        return Yii::$app->get('db2');
    } 

    public function rules()
    {
        return [
           [['name', 'gender', 'email'], 'required'],
            [['name', 'gender','email'], 'string', 'max' => 100],
            //[['email'], 'string', 'max' => 15]
        ];
    }   
}