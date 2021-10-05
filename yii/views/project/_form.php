<?php
//use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'title'); ?>
    <?= $form->field($model, 'description'); ?>
     
     
    <?= Html::submitButton($model->isNewRecord ? 'Add New Project' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-danger']); ?>
<br><br>
    <?= Html::a('Back', ['project/index'], ['class' => 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>