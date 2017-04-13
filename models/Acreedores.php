<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acreedores".
 *
 * @property integer $id_acreedores
 * @property string $number_identification
 * @property string $parameters
 * @property string $start_date
 * @property string $end_date
 */
class Acreedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acreedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_identification', 'parameters'], 'string'],
            [['start_date', 'end_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_acreedores' => 'Id Acreedores',
            'number_identification' => 'Number Identification',
            'parameters' => 'Parameters',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }
}
