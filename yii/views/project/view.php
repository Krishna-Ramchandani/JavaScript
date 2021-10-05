<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

echo "This is View of Project";

?>
 
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
             
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['project/edit', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['project/delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>




<br>
<?= Html::a('Back', ['project/index'], ['class' => 'btn btn-success']); ?>