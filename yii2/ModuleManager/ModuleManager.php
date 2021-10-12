<?php
namespace app\ModuleManager;

use app\models\Module;
use app\models\SearchModule;
use app\ModuleManager\ModuleInterface;
use Yii;
use yii\web\NotFoundHttpException;

class ModuleManager implements ModuleInterface{

    public function create()
    {
        $model = new Module();
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
    public function edit($id)
    {
        $model = $this->findModel($id);
        
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
         }
        return false;
    }

    
    public function delete($id)
    {
        return $this->findModel($id)->delete();
    }


    public function view($id)
    {
        return $this->findModel($id);
    }

    public function index()
    {
        $request=Yii::$app->request;
        $searchModel = new SearchModule();
        $dataProvider = $searchModel->search($request->post());

        return $array =  [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    protected function findModel($id)
    {
        if (($model = Module::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}

?>