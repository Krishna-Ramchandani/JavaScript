<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $gender
 *
 * @property Useraddress[] $useraddresses
 */
class NewUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['gender'], 'string'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'gender' => 'Gender',
        ];
    }

    /**
     * Gets query for [[Useraddresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUseraddresses()
    {
        return $this->hasMany(Useraddress::className(), ['userid' => 'id']);
    }
}
