<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Cedentes;
use app\models\Acreedores;
use app\models\Bank;
use app\models\Reports;
use app\models\Business;

class ColletionsController extends \yii\web\Controller {

    public function beforeAction($action) {
        try {
            $this->enableCsrfValidation = FALSE;
            return parent::beforeAction($action);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                        [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {
        $this->layout = 'analist';
        return $this->render('index');
    }

    public function actionModalnew() {
        $this->layout = 'modalnew';
        return $this->render('colle');
    }

    public function actionRegisternew() {

        $postData = file_get_contents("php://input");
        $post = json_decode($postData, true);
        $parametersCedentes = [];

        $parametersCedentes['assignor'] = $post['cedente'];
        $parametersCedentes['type_identification_assignor'] = $post['typeIdentificationcedente'];
        $parametersCedentes['name_assignor'] = $post['name'];
        $parametersCedentes['departament_assignor'] = $post['departamento'];
        $parametersCedentes['resident_assignor'] = $post['residencia'];
        $parametersCedentes['phone_assignor'] = $post['phone'];
        $parametersCedentes['email_assignor'] = $post['email'];

        $modelCedentes = new Cedentes;
        $modelCedentes->number_identification = $post['identificationcedente'];
        $modelCedentes->parameters = json_encode($parametersCedentes);
        $modelCedentes->start_date = date('Y-m-d');


        $parametersAcreedores = [];
        $parametersAcreedores ['clasification'] = $post['clasification'];
        $parametersAcreedores ['type_identification_creditor'] = $post['typeIdentificationcedente'];
        $parametersAcreedores ['name_creditor'] = $post['nameacree'];
        $parametersAcreedores ['departament_creditor'] = $post['departamentoacree'];
        $parametersAcreedores ['resident_creditor'] = $post['residenciaacree'];
        $parametersAcreedores ['phone_creditor'] = $post['phoneacree'];
        $parametersAcreedores ['email_creditor'] = $post['emailacreer'];
        $parametersAcreedores ['vr_adeudado'] = $post['vradecuado'];
        $parametersAcreedores ['date_report'] = date("Y-m-d", strtotime($post['reportdate']));

        $modelAcreedor = new Acreedores;
        $modelAcreedor->number_identification = $post['identificationacre'];
        $modelAcreedor->parameters = json_encode($parametersAcreedores);
        $modelAcreedor->start_date = date('Y-m-d');

        $modelBank = new Bank;
        $modelBank->numer_bank = $post['numberaccount'];
        $modelBank->type_account = $post['typeaccount'];
        $modelBank->name_bank = $post['bank'];



        if ($modelCedentes->save() && $modelAcreedor->save() && $modelBank->save()) {

            $session = Yii::$app->session;
            $id_employee = $session['id_employee'];
            
            $modelBusiness= new Business;
            $modelBusiness->name_business=$post['name'];
            $modelBusiness->id_type_donors=$post['cedente'];
            $modelBusiness->start_date=date('Y-m-d');
            $modelBusiness->save();
            
            $modelReports = new Reports;
            $modelReports->id_employee = $id_employee;
            $modelReports->id_cedente = $modelCedentes->id_cedente;
            $modelReports->id_acreedor = $modelAcreedor->id_acreedores;
            $modelReports->id_bank = $modelBank->id_bank;
            $modelReports->id_business = $modelBusiness->id_business;
            
         


            $parametersCedentes['id_cendentes'] = $modelCedentes->id_cedente;
            $parametersAcreedores['id_acreedor'] = $modelAcreedor->id_acreedores;
//          
            $parametros = [];
            $parametros['cedentes'] = $parametersCedentes;
            $parametros['acreedor'] = $parametersAcreedores;
            $modelReports->parameters = json_encode($parametros);

            $modelBank->save();
            if ($modelReports->save()) {
                $response = Reports::queryAllReports($id_employee);
                echo json_encode($resquest = ["response" => $response, "message" => "Actualizando", "title" => "Registro Exitoso", "type" => "success"]);
            }
        }
    }

    public function actionTablereports() {
        $session = Yii::$app->session;
        $id_employee = $session['id_employee'];
        $response = Reports::queryAllReports($id_employee);
        echo json_encode($response);
    }

    public function actionQueryclasificationreports() {
        $session = Yii::$app->session;
        $id_employee = $session['id_employee'];
        $postData = file_get_contents("php://input");
        $id_clasification = json_decode($postData, true);
      
        if ($id_clasification!=NULL){
            $query="r.id_employee='".$id_employee."' AND b.id_type_donors='".$id_clasification."'";
        }
        else {
            $query="r.id_employee='".$id_employee."'";
        }
       
        $response = Reports::queryReportsOne($query);
  
        $summatory=0;
        foreach ($response as $value) {
            $summatory=$summatory + json_decode($value['parameters'])->acreedor->vr_adeudado;
        }

         echo json_encode($resquest = ["response" => $response, "summatory" => $summatory]);
    }
    
    
    public function actionImportexcel(){

        $inputFile = "uploads/prueba.xlsx";
        try{
            $inputFileType= \PHPExcel_IOFactory::identify($inputFile);
            $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel =$objReader->load($inputFile);
            
        }catch(Exception $e){
            die ('Error');
        }
        
        $sheet =$objPHPExcel->getSheet(0);
        $highestRow= $sheet->getHighestRow();
        $highestColumn= $sheet->getHighestColumn();
        
        for ($row =1; $row <= $highestRow; $row++){
            $rowData[]= $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL, TRUE, FALSE);
            
            if ($row==1){
                continue;
            }
            
            
           
//            $modelReports= new Reports;
//            $modelReports->
        }
         var_dump($rowData);
    }

}


   