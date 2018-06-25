<?php

namespace app\models;
use yii\db\ActiveRecord;
class User extends ActiveRecord
{
	public $email =false;
	public $password = false;
}
