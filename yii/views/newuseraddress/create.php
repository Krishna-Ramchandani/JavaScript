<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NewUseraddressGiiCrud */

$this->title = 'Create New Useraddress Gii Crud';
$this->params['breadcrumbs'][] = ['label' => 'New Useraddress Gii Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="new-useraddress-gii-crud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
