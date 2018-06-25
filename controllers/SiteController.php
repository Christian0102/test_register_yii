<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Signup;

class SiteController extends Controller
{
		public function actionIndex()
		{
			
			return $this->render('index');
		}
		public function actionSignup()
		{	//Создание модель
			$model = new Signup();
			if(isset($_POST['Login']))
			{
				$model->email = $_POST['Login']['Email'];
				$model->password = $_POST['Login']['Password'];
				if($model->validate() && $model->signup()){
					return $this->goHome();
				}
			}
			return $this->render('signup',['model'=>$model]);
		}
}
