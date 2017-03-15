<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_donors".
 *
 * @property integer $id_donors
 * @property string $description_donors
 */
class TypeDonors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_donors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description_donors'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_donors' => 'Id Donors',
            'description_donors' => 'Description Donors',
        ];
    }
    
      public static function queryAllTypeDonors() {
         return $data = Yii::$app->db->createCommand("SELECT * FROM type_donors;")->queryAll();
     }
}
