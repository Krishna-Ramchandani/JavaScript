<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchApi */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Api', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?php  $form = ActiveForm::begin(); ?>

<?= $form->field($searchModel, 'search_api');//->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
</div>

 

<?php ActiveForm::end(); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url:url',
            'title',
            'description',
            'method',
            'request',
            'response',
            ['attribute'=>'Project Name',
            'value'=>function($data){
                return $data->project->title;
            }
            ],

            ['attribute'=>'Module Name',
            'value'=>function($data){
                return $data->module->title;
            }
            ],

            'project_id',
            'module_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
