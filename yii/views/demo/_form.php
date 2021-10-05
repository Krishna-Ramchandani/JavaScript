<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QuestionsDemo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-demo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'test_id')->textInput() ?>

    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'option_a')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option_b')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option_c')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'option_d')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marks')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
