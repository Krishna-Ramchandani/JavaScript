<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

echo "This is View of Api";

?>
 
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'url',
            'title',
            'description',
            'method',
            'request',
            'response',
            'project',
            'module',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['api/edit', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['api/delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>




<br>
<?= Html::a('Back', ['api/index'], ['class' => 'btn btn-success']); ?>