<?php

namespace app\controllers;
 
use yii\web\Controller; 

class FirstController extends Controller
{
    public function actionPrintsomething(){
        echo "This is the First Controller and This is Printsomething method ";
        //printsomething in url
    }
    
    public function actionTest(){
        //$this->layout=false;//header footer will not be visible for this particular view
       // return $this->renderPartial('test'); //header footer will not be visible for this particular view
        // $this->layout='layout_name'; // want to load particular layout for particular method
        $arr=[];
        $arr['name']='Krishna Ramchandani';
        $arr['operations']=['project','api','modules','user','userAddress'];
        return $this->render('test',$arr);
        //echo "This is the First Controller and This is Test method ";

        //test in url
    }

    public function actionDisplaySomething(){
        echo "This is the First Controller and This is Display Something method ";
        // display-something in url
    }

    public function actionPrint_something(){
        echo "This is the First Controller and This is Print_something method ";
        //print_something in url
    }
}
