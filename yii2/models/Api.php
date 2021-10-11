<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api".
 *
 * @property int $id
 * @property string $url
 * @property string $title
 * @property string $description
 * @property string $method
 * @property string $request
 * @property string $response
 * @property int $project_id
 * @property int $module_id
 *
 * @property Module $module
 * @property Project $project
 */
class Api extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'title', 'description', 'method', 'request', 'response', 'project_id', 'module_id'], 'required'],
            [['project_id', 'module_id'], 'integer'],
            [['url', 'title', 'method', 'request', 'response'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 200],
            [['module_id'], 'exist', 'skipOnError' => true, 'targetClass' => Module::className(), 'targetAttribute' => ['module_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'title' => 'Title',
            'description' => 'Description',
            'method' => 'Method',
            'request' => 'Request',
            'response' => 'Response',
            'project_id' => 'Project ID',
            'module_id' => 'Module ID',
        ];
    }

    /**
     * Gets query for [[Module]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
        return $this->hasOne(Module::className(), ['id' => 'module_id']);
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
}
