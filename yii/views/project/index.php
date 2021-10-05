<?php

use app\widgets\Alert;
use yii\helpers\Html;
?>
 
<style>
table th,td{
    padding: 10px;
}
</style>
 <p>
<?= Html::a('Add New Project', ['project/create'], ['class' => 'btn btn-warning']); ?>
<br>
 </p>
<table border="1">
 
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
        
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->title; ?></td>
        <td><?= $field->description; ?></td>
         
        <td>
            <?= Html::a("View", ['project/view', 'id' => $field->id],['class' => 'btn btn-success']); ?> 
            |
            <?= Html::a("Update", ['project/edit', 'id' => $field->id],['class' => 'btn btn-primary']); ?> 
            | 
            <?= Html::a("Delete", ['project/delete', 'id' => $field->id],[
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