<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehiculos".
 *
 * @property integer $id_vehiculos
 * @property string $placa
 * @property string $parameters
 * @property string $start_date
 * @property string $end_date
 */
class Vehiculos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehiculos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['placa', 'parameters'], 'string'],
            [['start_date', 'end_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vehiculos' => 'Id Vehiculos',
            'placa' => 'Placa',
            'parameters' => 'Parameters',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }
}
