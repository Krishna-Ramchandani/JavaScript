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
<?= Html::a('Add New Api', ['api/create'], ['class' => 'btn btn-warning']); ?>
<br>
 </p>
<table border="1">
 
    <tr>
        <th>URL</th>
        <th>Title</th>
        <th>Descripton</th>
        <th>Method</th>
        <th>Request</th>
        <th>Response</th>
        <th>project</th>
        <th>Module</th>
        <th>Action</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->url; ?></td>
        <td><?= $field->title; ?></td>
        <td><?= $field->description; ?></td>
        <td><?= $field->method; ?></td>
        <td><?= $field->request; ?></td>
        <td><?= $field->response; ?></td>
        <td><?= $field->project; ?></td>
        <td><?= $field->module; ?></td>
        <td>
            <?= Html::a("View", ['api/view', 'id' => $field->id],['class' => 'btn btn-success']); ?> 
            |
            <?= Html::a("Update", ['api/edit', 'id' => $field->id],['class' => 'btn btn-primary']); ?> 
            | 
            <?= Html::a("Delete", ['api/delete', 'id' => $field->id],[
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