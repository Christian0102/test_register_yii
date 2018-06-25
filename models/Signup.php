<?php
namespace app\models;
use yii\base\model;
use app\models\User;

class Signup extends Model
{
	public $email;
	public $password;
	public function rules()
	{	//Правила валидаций
		return [
			[['email','password']],'required'],
			['email','email'],
			['email','uniq','targetClass'=>'app\models\User'],
			['password','string','min'=>2,'max'=>10]
		
		];
		
	}
	//Метод которые записывает данныее в модель
	public function signup()
	{
		$user = new User();
		$user->email = $this->email;
		$user->password = $this->password;
		return $user->save();//
	}
	
	
}





?>