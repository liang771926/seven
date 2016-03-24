<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * UserForm is the model behind the login form.
 */
class LiuyanForm extends \yii\db\ActiveRecord
{
    public static function tableName(){
        return 'liuyan';
    }
  
}
