<?php
//use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'url'); ?>
    <?= $form->field($model, 'title'); ?>
    <?= $form->field($model, 'description'); ?>
    <?= $form->field($model, 'method'); ?>
    <?= $form->field($model, 'request'); ?>
    <?= $form->field($model, 'response'); ?>
    <?= $form->field($model, 'project'); ?>
    <?= $form->field($model, 'module'); ?>
     
    <?= Html::submitButton($model->isNewRecord ? 'Add New Api' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-danger']); ?>
<br><br>
    <?= Html::a('Back', ['api/index'], ['class' => 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>