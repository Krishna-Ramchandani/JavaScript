<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

echo "This is View of Modules";

?>
 
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'project',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['module/edit', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['module/delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>




<br>
<?= Html::a('Back', ['module/index'], ['class' => 'btn btn-success']); ?>