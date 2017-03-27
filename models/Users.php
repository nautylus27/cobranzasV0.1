<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id_users
 * @property integer $id_rol
 * @property string $username
 * @property string $password
 * @property string $start_date
 * @property string $end_date
 */
class Users extends \yii\db\ActiveRecord {

    
    
    public $id;
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['username', 'password'], 'string'],
                [['start_date', 'end_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id_users' => 'Id Users',
            'id_rol' => 'Id Rol',
            'username' => 'Username',
            'password' => 'Password',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
        ];
    }

    public static function validateUsers($parameters) {
       return $data = Yii::$app->db->createCommand("SELECT c.*, d.* FROM users AS c, employee AS d WHERE  c.password = '".$parameters['password']."' AND c.username='".$parameters['username']."';")->queryOne();
    }
    
 public static function infoEmployee($id_user)
    {
         return $data = Yii::$app->db->createCommand("SELECT c.*, d.* FROM users AS c, employee AS d WHERE  c.id_users = '".$id_user."';")->queryOne();
    }


}
