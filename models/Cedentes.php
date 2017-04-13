<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cedentes".
 *
 * @property integer $id_cedente
 * @property string $number_identification
 * @property string $parameters
 * @property string $start_date
 * @property string $end_date
 */
class Cedentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cedentes';
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
            'id_cedente' => 'Id Cedente',
            'number_identification' => 'Number Identification',
            'parameters' => 'Parameters',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }
}
