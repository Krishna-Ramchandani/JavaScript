<?php

namespace app\controllers;

use app\common\CommonInterface;
use app\models\UserAddress;
use app\models\SearchUserAddress;
// use app\UserAddressManager\UserAddressInterface;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * UseraddressController implements the CRUD actions for UserAddress model.
 */
class UseraddressController extends Controller
{
    /**
     * @inheritDoc
     */

    public $finder;
    public function __construct($id, $module, CommonInterface $finder, $config=[])
    {
        $this->finder = $finder;
        parent::__construct($id, $module, $config);       
    }


    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all UserAddress models.
     * @return mixed
     */
    public function actionIndex()
    {

        $model=$this->finder->index();
        return $this->render('index',$model);
        // $searchModel = new SearchUserAddress();
        // $dataProvider = $searchModel->search($this->request->post());

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
    }

    /**
     * Displays a single UserAddress model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);

        return $this->render('view', [
            'model' => $this->finder->view($id),
        ]);

    }

    /**
     * Creates a new UserAddress model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = $this->finder->create();
        if(isset($model->id)){
            return $this->redirect(['view','id'=>$model->id]);
        }
        return $this->render('create',[
            'model' => $model,
        ]);


        // $model = new UserAddress();

        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post()) && $model->save()) {
        //         return $this->redirect(['view', 'id' => $model->id]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }

        // return $this->render('create', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Updates an existing UserAddress model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        // $model = $this->findModel($id);

        // if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        // return $this->render('update', [
        //     'model' => $model,
        // ]);

        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            $is_update = $this->finder->edit($id);
            return $this->redirect(['view', 'id' => $id]);
        }
        $model= $this->finder->view($id);
        if(isset($model)){
            
            return $this->render('update', [
                'model' => $model,
            ]);
            
        }
       
    }

    /**
     * Deletes an existing UserAddress model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        // $this->findModel($id)->delete();

        // return $this->redirect(['index']);

        $this->finder->delete($id);
        return $this->redirect(['index']);
    }

    /**
     * Finds the UserAddress model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return UserAddress the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    // protected function findModel($id)
    // {
    //     if (($model = UserAddress::findOne($id)) !== null) {
    //         return $model;
    //     }

    //     throw new NotFoundHttpException('The requested page does not exist.');
    // }
}

Yii::$container->set('app\common\CommonInterface','app\UserAddressManager\UserAddressManager');
