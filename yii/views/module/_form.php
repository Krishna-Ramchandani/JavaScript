<?php
//use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'title'); ?>
    <?= $form->field($model, 'description'); ?>
    <?= $form->field($model, 'project'); ?>
     
    <?= Html::submitButton($model->isNewRecord ? 'Add New Module' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-danger']); ?>
<br><br>
    <?= Html::a('Back', ['module/index'], ['class' => 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>