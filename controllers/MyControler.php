<?php
namespace app\controllers;

use yii\web\Controller;
class MyControler extends Controller{

public function actionHi(){
    
return  $this->renser('hi');
    }
}