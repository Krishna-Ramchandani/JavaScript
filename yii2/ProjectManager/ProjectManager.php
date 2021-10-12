<?php
namespace app\ProjectManager;
use app\models\Project;
use app\models\SearchProject;
use app\ProjectManager\ProjectInterface;
use Yii;
use yii\web\NotFoundHttpException;

class ProjectManager implements ProjectInterface{

    public function create()
    {
        $model = new Project();
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return $model;
            }
        } else{
            $model->loadDefaultValues();
        }
        return $model;

    }

    public function view($id){ return $this->findModel($id);}

    public function delete($id)
    {
        return $this->findModel($id)->delete();
    }

    public function edit($id){
        $model = $this->findModel($id);
        
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
         }
        return false;}

    public function index(){

        $request=Yii::$app->request;
        $searchModel = new SearchProject();
        $dataProvider = $searchModel->search($request->post());

        return $array =  [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }


    protected function findModel($id)
    {
        if (($model = Project::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}

?>