<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property int $question_id
 * @property int $test_id
 * @property string $question
 * @property string $image
 * @property string $option_a
 * @property string $option_b
 * @property string $option_c
 * @property string $option_d
 * @property string $answer
 * @property int $marks
 */
class QuestionsDemo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_id', 'question', 'option_a', 'option_b', 'option_c', 'option_d', 'answer', 'marks'], 'required'],
            [['test_id', 'marks'], 'integer'],
            [['question', 'option_a', 'option_b', 'option_c', 'option_d'], 'string'],
            [['image'], 'string', 'max' => 200],
            [['answer'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'test_id' => 'Test ID',
            'question' => 'Question',
            'image' => 'Image',
            'option_a' => 'Option A',
            'option_b' => 'Option B',
            'option_c' => 'Option C',
            'option_d' => 'Option D',
            'answer' => 'Answer',
            'marks' => 'Marks',
        ];
    }
}
