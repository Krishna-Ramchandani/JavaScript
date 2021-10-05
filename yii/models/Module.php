<?php
namespace app\models;
 
use Yii;
 
class Module extends \yii\db\ActiveRecord
{
     
    public static function tableName()
    {
        return 'module';
    }
     
    public static function getDb()
    {
        return Yii::$app->get('db2');
    } 

    public function rules()
    {
        return [
            [['title', 'description', 'project'], 'required'],
            [['title', 'description','project'], 'string', 'max' => 100],
            //[['email'], 'string', 'max' => 15]
        ];
    }   
}