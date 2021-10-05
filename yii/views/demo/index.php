<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchQuestions */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questions Demos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-demo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Questions Demo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'question_id',
            'test_id',
            'question:ntext',
            'image',
            'option_a:ntext',
            //'option_b:ntext',
            //'option_c:ntext',
            //'option_d:ntext',
            //'answer',
            //'marks',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        //custom action buttons/ columns to override 
    ]); ?>


</div>
