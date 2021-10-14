<?php
namespace app\UsersManager;

use app\common\CommonInterface;
use app\models\SearchUsers;
use app\models\Users;
// use app\UsersManager\UsersInterface;
use Yii;
use yii\web\NotFoundHttpException;

class UsersManager implements CommonInterface{

    public function create()
    {
        $model = new Users();
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

    public function view($id)
    {
        return $this->findModel($id);
    }


    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function delete($id)
    {
        return $this->findModel($id)->delete();
    }


    public function edit($id)
    {
        // $model = $this->findModel($id);

        // $params = Yii::$app->getRequest()->getBodyParams();

        
        // if(isset($params) && !empty($params)){
        //     if($model->load($params) && $model->save()){
        //        // echo "<pre>";print_r($params);die; redirect(['view', 'id' => $model->id])
        //         // return Yii::$app->response->redirect(['users/view'],['id'=>'id']);
        //     //    return Yii::$app->response->redirect(['views\users\view', 'id' => $model->id]);
        //     return true;
        //     }
        // }

        // // else {
        // //     $model->loadDefaultValues();
        // // }

        // return false;


        $model = $this->findModel($id);
        
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
         }
        return false;

        
    }


    public function index()
    {
        $request=Yii::$app->request;
        $searchModel = new SearchUsers();
        $dataProvider = $searchModel->search($request->post());

        return $array =  [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }


}

?>