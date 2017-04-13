<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Users;

class DashController extends \yii\web\Controller {

    public function actionIndex() {
        $this->layout = 'analist';
        $session = Yii::$app->session;
        $user_id = $session['id_users'];
        $model= Users::infoEmployee($user_id);
        return $this->render('index', ['model' => $model]);
    }

}
