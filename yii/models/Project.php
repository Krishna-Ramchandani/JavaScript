<?php
namespace app\models;
 
use Yii;
 
class Project extends \yii\db\ActiveRecord
{
     
    public static function tableName()
    {
        return 'project';
    }
     
    public static function getDb()
    {
        return Yii::$app->get('db2');
    } 

    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['title', 'description'], 'string', 'max' => 100],
            //[['email'], 'string', 'max' => 15]
        ];
    }   
}