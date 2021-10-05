<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

echo "This is View of User Address";

?>
 
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'addLine1',
            'addLine2',
            'city',
            'state',
            'pincode',
            'country',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['useraddress/edit', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['useraddress/delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>




<br>
<?= Html::a('Back', ['useraddress/index'], ['class' => 'btn btn-success']); ?>