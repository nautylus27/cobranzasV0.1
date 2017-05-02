<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prueba_propietario".
 *
 * @property integer $id_propietario
 * @property string $dni
 * @property string $parameters
 */
class PruebaPropietario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prueba_propietario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dni'], 'number'],
            [['parameters'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_propietario' => 'Id Propietario',
            'dni' => 'Dni',
            'parameters' => 'Parameters',
        ];
    }

}
