<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
?>
 
<style>
table th,td{
    padding: 10px;
}
</style>
 <p>
<?= Html::a('Add New User Address', ['useraddress/create'], ['class' => 'btn btn-warning']); ?>
<br>
 </p>
 
 <?php $form = ActiveForm::begin(); ?>

<?= $form->field($searchModel, 'search_address');//->textInput(['maxlength' => true]) ?>

<div class="form-group">


       <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
       <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>


   </div>

<?php ActiveForm::end(); ?>
<?= GridView::widget([
       'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
       'columns' => [
           // /['class' => 'yii\grid\SerialColumn'],

           'addLine1',
           'addLine2',
           'city',
           'state',
           'pincode',
           'country',
           // 'image',
           // 'option_a:ntext',
           //'option_b:ntext',
           //'option_c:ntext',
           //'option_d:ntext',
           //'answer',
           //'marks',

           // ['class' => 'yii\grid\ActionColumn'],
       ],
       //custom action buttons/ columns to override 
   ]); ?>
 
<table border="1">
 
    <tr>
        <th>Address Line 1</th>
        <th>Address Line 2</th>
        <th>City</th>
        <th>State</th>
        <th>Pincode</th>
        <th>Country</th>
        <th>Actions</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->addLine1; ?></td>
        <td><?= $field->addLine2; ?></td>
        <td><?= $field->city; ?></td>
        <td><?= $field->state; ?></td>
        <td><?= $field->pincode; ?></td>
        <td><?= $field->country; ?></td>
        <td>
            <?= Html::a("View", ['useraddress/view', 'id' => $field->id],['class' => 'btn btn-success']); ?> 
            |
            <?= Html::a("Update", ['useraddress/edit', 'id' => $field->id],['class' => 'btn btn-primary']); ?> 
            | 
            <?= Html::a("Delete", ['useraddress/delete', 'id' => $field->id],[
                'class' => 'btn btn-danger',
                'data' => [
                'confirm' => 'Data will be Deleted Permenantly?',
                'method' => 'post',
            ]]); ?>
            
            
        
        </td>
    </tr>
    <?php } 
    
      ?>
</table>