<?php
namespace app\UserAddressManager;
use app\models\UserAddress;
use app\UserAddressManager\UserAddressInterface;
use Yii;
use yii\web\NotFoundHttpException;

class UserAddressManager implements UserAddressInterface{

    public function create()
    {
        $model = new UserAddress();
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
        
    }


    
    protected function findModel($id)
    {
        if (($model = UserAddress::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}

?>