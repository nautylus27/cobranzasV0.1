<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "business".
 *
 * @property integer $id_business
 * @property string $name_business
 * @property string $id_type_donors
 * @property string $start_date
 * @property string $end_date
 */
class Business extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'business';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_business', 'id_type_donors'], 'string'],
            [['start_date', 'end_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_business' => 'Id Business',
            'name_business' => 'Name Business',
            'id_type_donors' => 'Id Type Donors',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }
}
