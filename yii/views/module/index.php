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
<?= Html::a('Add New Module', ['module/create'], ['class' => 'btn btn-warning']); ?>
<br>
 </p>
<table border="1">
 
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Project</th>
        <th>Action</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->title; ?></td>
        <td><?= $field->description; ?></td>
        <td><?= $field->project; ?></td>
        <td>
            <?= Html::a("View", ['module/view', 'id' => $field->id],['class' => 'btn btn-success']); ?> 
            |
            <?= Html::a("Update", ['module/edit', 'id' => $field->id],['class' => 'btn btn-primary']); ?> 
            | 
            <?= Html::a("Delete", ['module/delete', 'id' => $field->id],[
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