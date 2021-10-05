<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "useraddress".
 *
 * @property int $id
 * @property string $addressline
 * @property string $city
 * @property string $state
 * @property string $country
 * @property int|null $userid
 *
 * @property NewUsers $user
 */
class NewUseraddressGiiCrud extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'useraddress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['addressline', 'city', 'state', 'country'], 'required'],
            [['userid'], 'integer'],
            [['addressline', 'city', 'state', 'country'], 'string', 'max' => 255],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => NewUsers::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'addressline' => 'Addressline',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'userid' => 'Userid',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(NewUsers::className(), ['id' => 'userid']);
    }
}
