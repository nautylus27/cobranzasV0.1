<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prueba_vehiculo".
 *
 * @property integer $id_vehiculo
 * @property string $placa
 * @property string $parameters
 */
class PruebaVehiculo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prueba_vehiculo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['placa', 'parameters'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vehiculo' => 'Id Vehiculo',
            'placa' => 'Placa',
            'parameters' => 'Parameters',
        ];
    }
}
