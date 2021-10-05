<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QuestionsDemo */

$this->title = 'Create Questions Demo';
$this->params['breadcrumbs'][] = ['label' => 'Questions Demos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-demo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
