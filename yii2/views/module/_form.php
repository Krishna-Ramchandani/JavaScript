<?php

use app\models\Project;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Module */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="module-form">

    <?php $form = ActiveForm::begin(); ?>


    <?php $data = Project::find()->select(['title','id'])->indexBy('id','title')->column();  //echo "<pre>";print_r($data);die;  //findList
        if(!empty($data)){
            $datas=$data;
        }
        else {
            echo "<option>-</option>"; 
        }
    ?>
    
    <?= $form->field($model, 'project_id')->dropDownList($datas  
    //  ['id',
    //  'title' ]     $form->field($model, 'project_id')->textInput()
     )->label('Select Project Title'); 
    ?>





    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

     

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
