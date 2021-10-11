<?php

use app\models\Users;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserAddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-address-form">

    <?php $form = ActiveForm::begin(); ?>


    <?php $data = Users::find()->select(['name','id'])->indexBy('id','name')->column();  //echo "<pre>";print_r($data);die;  //findList
        if(!empty($data)){
            $datas=$data;
        }
        else {
            echo "<option>-</option>"; 
        }
    ?>
    
    <?= $form->field($model, 'user_id')->dropDownList($datas  
    //  ['id',
    //  'title' ]     $form->field($model, 'project_id')->textInput()      $form->field($model, 'user_id')->textInput() 
     )->label('Select User Name'); 
    ?>




    <?= $form->field($model, 'addressline')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

      

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
