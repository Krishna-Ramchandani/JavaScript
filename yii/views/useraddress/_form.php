<?php
//use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'addLine1'); ?>
    <?= $form->field($model, 'addLine2'); ?>
    <?= $form->field($model, 'city'); ?>
    <?= $form->field($model, 'state'); ?>
    <?= $form->field($model, 'pincode'); ?>
    <?= $form->field($model, 'country'); ?>
     
    <?= Html::submitButton($model->isNewRecord ? 'Add New User Address' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-danger']); ?>
<br><br>
    <?= Html::a('Back', ['useraddress/index'], ['class' => 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>