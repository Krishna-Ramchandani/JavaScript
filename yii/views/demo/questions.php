<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QuestionsDemo */
/* @var $form ActiveForm */
?>
<div class="demo-questions">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'test_id') ?>
        <?= $form->field($model, 'question_id') ?>
        <?= $form->field($model, 'question') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'option_a') ?>
        <?= $form->field($model, 'option_b') ?>
        <?= $form->field($model, 'option_c') ?>
        <?= $form->field($model, 'option_d') ?>
        <?= $form->field($model, 'answer') ?>
        <?= $form->field($model, 'marks') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- demo-questions -->
