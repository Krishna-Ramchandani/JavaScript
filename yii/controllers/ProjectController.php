<?php

namespace app\controllers;
use yii\data\ActiveDataProvider;

use app\models\Project;
use yii\bootstrap\Alert;use yii\base\Widget;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
 
/**
 * manual CRUD
 **/
class ProjectController extends Controller
{  
    /**
     * Create
     */
    public function actionCreate()
    {
        $model = new Project();
 
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }

    /**
     * Read
     */
    public function actionIndex()
    {
       // $dataProvider = new ActiveDataProvider(['pagination'=>['pageSize'=>5]]);

        $users = Project::find()->all();
         
        return $this->render('index', ['model' => $users]);//,'dataProvider'=>$dataProvider
    }

     /**
     * Edit
     * @param integer $id
     */
    public function actionEdit($id)
    {
        $model = Project::find()->where(['id' => $id])->one();
 
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
         
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
         
        return $this->render('update', ['model' => $model]);
    }   

    /**
     * Delete
     */
    public function actionDelete($id)
    {
        $model = Project::findOne($id);
        
       // $id not found in database
       if($model === null)
           throw new NotFoundHttpException('The requested page does not exist.');
            
       // delete record

    //    Alert::begin([
    //     'options' => [
    //         'class' => 'alert-warning',
    //     ],
    // ]);
    
    // echo 'Say hello...';
    
    // Alert::end();
    //$this->registerJs('if(confirm("Sure Delete Data?")){');

       $model->delete();
     //  $this->registerJs('} else{alert("Cancelled");');
        
       return $this->redirect(['index']);
    }
    
    

    // View
    public function actionView($id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);

        $users = Project::findOne($id);//->one($id);
        //$users = Users::find()->where(['id' => $id])->one();
         
        return $this->render('view', ['model' => $users]);
    }

}