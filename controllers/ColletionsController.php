<?php

namespace app\controllers;

class ColletionsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'analist';
        return $this->render('index');
    }

}
