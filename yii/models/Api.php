<?php
namespace app\models;
 
use Yii;
 
class Api extends \yii\db\ActiveRecord
{
     
    public static function tableName()
    {
        return 'api';
    }
     
    public static function getDb()
    {
        return Yii::$app->get('db2');
    } 

    public function rules()
    {
        return [
            [['url', 'title', 'description','method','request','response','project','module'], 'required'],
            [['url', 'title', 'description','method','request','response','project','module'], 'string', 'max' => 100],
             
        ];
    }   
}