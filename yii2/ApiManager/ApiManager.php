<?php
namespace app\ApiManager;

use app\models\Api;
// use app\ApiManager\ApiInterface;
use app\common\CommonInterface;
use app\models\SearchApi;
use Yii;
use yii\web\NotFoundHttpException;

class ApiManager implements CommonInterface{

    public function create()
    {
        $model = new Api();
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
        $searchModel = new SearchApi();
        $dataProvider = $searchModel->search($request->post());

        return $array =  [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }
    protected function findModel($id)
    {
        if (($model = Api::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}

?>