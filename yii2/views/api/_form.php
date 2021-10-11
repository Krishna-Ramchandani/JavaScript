<?php

use app\models\Module;
use app\models\Project;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Api */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="api-form">

    <?php $form = ActiveForm::begin(); ?>

<!-- Project DropDown -->
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
    //  'title' ]     $form->field($model, 'project_id')->textInput()   $form->field($model, 'project_id')->textInput()
     )->label('Select Project Title'); 
    ?>

        <!-- Module Drop Down -->
    <?php $data = Module::find()->select(['title','id'])->indexBy('id','title')->column();  //echo "<pre>";print_r($data);die;  //findList
        if(!empty($data)){
            $datas=$data;
        }
        else {
            echo "<option>-</option>"; 
        }
    ?>
    
    <?= $form->field($model, 'module_id')->dropDownList($datas  
    //  ['id',
    //  'title' ]     $form->field($model, 'project_id')->textInput()   $form->field($model, 'project_id')->textInput() 
    // $form->field($model, 'module_id')->textInput()
     )->label('Select Module Title'); 
    ?>




    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'response')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
