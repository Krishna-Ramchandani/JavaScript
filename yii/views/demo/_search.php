<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchQuestions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-demo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'question_id') ?>

    <?= $form->field($model, 'test_id') ?>

    <?= $form->field($model, 'question') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'option_a') ?>

    <?php // echo $form->field($model, 'option_b') ?>

    <?php // echo $form->field($model, 'option_c') ?>

    <?php // echo $form->field($model, 'option_d') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <?php // echo $form->field($model, 'marks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
