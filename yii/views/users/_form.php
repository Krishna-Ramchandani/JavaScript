<?php
//use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'gender'); ?>
    <?= $form->field($model, 'email'); ?>
     
    <?= Html::submitButton($model->isNewRecord ? 'Add New User' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-danger']); ?>
<br><br>
    <?= Html::a('Back', ['users/index'], ['class' => 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>