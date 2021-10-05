<?php
namespace app\models;
 
use Yii;
 
class UserAddress extends \yii\db\ActiveRecord
{
     
    public static function tableName()
    {
        return 'user_address';
    }
     
    public static function getDb()
    {
        return Yii::$app->get('db2');
    } 

    public function rules()
    {
        return [
            [['addLine1', 'addLine2', 'city','state','pincode','country'], 'required'],
            [['addLine1', 'addLine2', 'city','state','pincode','country'], 'string', 'max' => 100],
            //[['email'], 'string', 'max' => 15]
        ];
    }   
}