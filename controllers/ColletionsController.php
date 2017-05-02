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
use app\models\PruebaPropietario;
use app\models\PruebaVehiculo;


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
    
    
    public function actionImportexcelvehiculo(){

        $inputFile = "uploads/vehiculo.xls";
		$parametros = [];
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

			
	    for ($row =42603; $row <= $highestRow; $row++){
            $rowData[]= $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL, TRUE, FALSE);

        }
	
		
			
		foreach ($rowData as $key =>$data){
			if($data[0][0]!=null){
				// $dataVa = Yii::$app->db->createCommand("SELECT * FROM prueba_vehiculo as p WHERE p.placa='" . $data[0][0] . "'")->queryAll();
				
			// if(empty($dataVa) && is_array($dataVa)){
				$parameters['interno']=$data[0][1];
				$parameters['movil']=$data[0][2];
				$parameters['modo']=$data[0][3];
				$parameters['marca']=$data[0][4];
				$parameters['modelo']=$data[0][5];
				$parameters['color']=$data[0][6];
				$parameters['numero_chasi']=$data[0][7];
				$parameters['numero_moto']=$data[0][8];
				$parameters['serie']=$data[0][9];
				$parameters['carroceria']=$data[0][10];
				$parameters['clase_combustible']=$data[0][11];
				$parameters['capacidad']=$data[0][12];
				$parameters['cilindraje']=$data[0][13];
				$parameters['linea']=$data[0][14];
				$parameters['fecha_matricula']=$data[0][15];
				$parameters['fecha_afiliacion']=$data[0][18];
				$parameters['numero_tarjeta_operacion']=$data[0][19];
				$parameters['fecha_expeciencia']=$data[0][20];
				
				     $model= new PruebaVehiculo;
			         $model->placa = $data[0][0];
					 $model->dni_propietario= $data[0][16];
					 $model->dni_conductor= $data[0][17];
					 $model->parameters= json_encode($parameters);
					 $model->save();
				
					 
			// }
			}
		}
			// echo json_encode($resquest = [ "message" => "Actualizando", "title" => "Registro Exitoso", "type" => "success"]);
		}

		
		// $validateDocument=PruebaPropietario::validate($dataValida);
 

		 // foreach($rowData as $key => $data){
			// if($data[0][1]!=null){
			   // $modelprueba= new PruebaPropietario;
			   // $modelprueba->dni = $data[0][1];
			   // $parametros[] =
			   // $modelprueba->save();
			// }
			// else {
				
			// }
		 // }
    
	
	
	public function actionImportexcelpropietario(){

        $inputFile = "uploads/info.xlsx";
		$parametros = [];
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

        }
		
		$dataValida=[];
		foreach($rowData as $key => $data){
			if($data[0][1]!=null){
				$dataVa = Yii::$app->db->createCommand("SELECT * FROM prueba_propietario as p WHERE p.dni='" . $data[0][1] . "'")->queryAll();
				
				if(empty($dataVa) && is_array($dataVa)){
				
					 $parameters['nombres']=$data[0][2];
					 $parameters['apellido']=$data[0][3];
					 $parameters['fecha_nacimiento']=$data[0][4];
					 $parameters['sexo']=$data[0][5];
					 $parameters['estado_civil']=$data[0][6];
					 $parameters['grupo_sanguinio']=$data[0][7];
					 $parameters['departamento_ciudad']=$data[0][8];
					 $parameters['direccion']=$data[0][9];
					 $parameters['barrio']=$data[0][10];
					 $parameters['typo_vivienda']=$data[0][11];
					 $parameters['telefono']=$data[0][14];
					 $parameters['celular']=$data[0][15];
					 $parameters['correo']=$data[0][16];
					 $parameters['licencia']=$data[0][21];
					 $parameters['categoria']=$data[0][22];
					 $parameters['vence_licencia']=$data[0][23];
					 $parameters['vehiculo']=$data[0][29];
				
					 $model= new PruebaPropietario;
			         $model->dni = $data[0][1];
					 $model->parameters= json_encode($parameters);
					 $model->save();				
					 }
			}
		}

		
		// $validateDocument=PruebaPropietario::validate($dataValida);
 

		 // foreach($rowData as $key => $data){
			// if($data[0][1]!=null){
			   // $modelprueba= new PruebaPropietario;
			   // $modelprueba->dni = $data[0][1];
			   // $parametros[] =
			   // $modelprueba->save();
			// }
			// else {
				
			// }
		 // }
    }

}


   