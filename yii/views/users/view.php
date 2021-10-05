<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

echo "This is View of users";

?>
 
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'gender',
            'email',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['users/edit', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['users/delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>




<br>
<?= Html::a('Back', ['users/index'], ['class' => 'btn btn-success']); ?>