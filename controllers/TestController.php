<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex($id = null)
    {
        if (isset($id)){
            return $this->render('say');
        }else{
            return 'ti ohuel?';
        }
}
}