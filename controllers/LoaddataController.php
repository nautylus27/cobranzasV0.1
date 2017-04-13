<?php

namespace app\controllers;

class LoaddataController extends \yii\web\Controller {

    public function actionIndex() {
        $this->layout = 'analist';
        return $this->render('index');
    }

}
