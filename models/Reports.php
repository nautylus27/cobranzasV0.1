<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reports".
 *
 * @property integer $id_report
 * @property integer $id_employee
 * @property integer $id_cedente
 * @property integer $id_acreedor
 * @property integer $id_bank
 * @property integer $id_business
 * @property string $parameters
 */
class Reports extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'reports';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['id_employee', 'id_cedente', 'id_acreedor', 'id_bank', 'id_business'], 'integer'],
                [['parameters'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id_report' => 'Id Report',
            'id_employee' => 'Id Employee',
            'id_cedente' => 'Id Cedente',
            'id_acreedor' => 'Id Acreedor',
            'id_bank' => 'Id Bank',
            'id_business' => 'Id Business',
            'parameters' => 'Parameters',
        ];
    }

    public function queryAllReports($id_employee) {

        return $data = Yii::$app->db->createCommand("SELECT * FROM reports AS r INNER JOIN business AS b ON r.id_business=b.id_business WHERE r.id_employee='" . $id_employee . "'")->queryAll();
    }

    public function queryReportsOne($query) {
        return $data = Yii::$app->db->createCommand("SELECT * FROM reports AS r INNER JOIN business AS b ON r.id_business=b.id_business WHERE " . $query . "")->queryAll();
    }

}
