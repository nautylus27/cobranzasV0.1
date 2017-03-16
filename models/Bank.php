<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property integer $id_bank
 * @property string $numer_bank
 * @property string $type_account
 * @property string $name_bank
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numer_bank'], 'number'],
            [['type_account', 'name_bank'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bank' => 'Id Bank',
            'numer_bank' => 'Numer Bank',
            'type_account' => 'Type Account',
            'name_bank' => 'Name Bank',
        ];
    }
}
