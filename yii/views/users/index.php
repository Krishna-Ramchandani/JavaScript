<?php

use app\widgets\Alert;
use yii\bootstrap4\ActiveField;
use yii\bootstrap4\ActiveForm as Bootstrap4ActiveForm;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

use yii\helpers\Html;
?>
 
<style>
table th,td{
    padding: 10px;
}
</style>
 
<?= Html::a('Add New User', ['users/create'], ['class' => 'btn btn-warning']); ?>
<br>
 
 <?php $form = ActiveForm::begin(); ?>

 <?= $form->field($searchModel, 'search_users');//->textInput(['maxlength' => true]) ?>

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

            'name',
            'gender',
            'email',
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
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->name; ?></td>
        <td><?= $field->gender; ?></td>
        <td><?= $field->email; ?></td>
        <td>
            <?=   Html::a("View", ['users/view', 'id' => $field->id],['class' => 'btn btn-success']); ?> 
            |
            <?= Html::a("Update", ['users/edit', 'id' => $field->id],['class' => 'btn btn-primary']); ?> 
            | 
            <?= Html::a("Delete", ['users/delete', 'id' => $field->id],[
                'class' => 'btn btn-danger',
                'data' => [
                'confirm' => 'Data will be Deleted Permenantly?',
                'method' => 'post',
            ]]); ?>
            
            
        
        </td>
    </tr>
    <?php   } 
    
      ?>
</table>