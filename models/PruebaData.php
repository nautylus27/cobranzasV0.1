<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prueba_data".
 *
 * @property integer $id_report
 * @property string $number_document
 * @property string $type_document
 * @property string $type_balance
 * @property string $type_report
 * @property boolean $quantificable_report
 * @property string $amount
 * @property string $status
 * @property string $observations
 * @property string $start_date
 * @property string $end_start
 * @property string $creation_date
 * @property string $parameters
 */
class PruebaData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prueba_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_document', 'amount'], 'number'],
            [['type_document', 'type_balance', 'type_report', 'status', 'observations', 'parameters'], 'string'],
            [['quantificable_report'], 'boolean'],
            [['start_date', 'end_start', 'creation_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_report' => 'Id Report',
            'number_document' => 'Number Document',
            'type_document' => 'Type Document',
            'type_balance' => 'Type Balance',
            'type_report' => 'Type Report',
            'quantificable_report' => 'Quantificable Report',
            'amount' => 'Amount',
            'status' => 'Status',
            'observations' => 'Observations',
            'start_date' => 'Start Date',
            'end_start' => 'End Start',
            'creation_date' => 'Creation Date',
            'parameters' => 'Parameters',
        ];
    }
}
