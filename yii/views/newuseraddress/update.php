<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NewUseraddressGiiCrud */

$this->title = 'Update New Useraddress Gii Crud: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'New Useraddress Gii Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="new-useraddress-gii-crud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
