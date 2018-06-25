<h1>Register</h1>
<?php
//Подключения виджетов
use \yii\widgets\ActiveForm;
$form = ActiveForm::begin(['class'=>'form-horizontal']);

?>


<?=$form -> field($model,'email')->textInput(['autofocus'=>true])?>
<?= $form -> field($model,'password')->passwordInput()?>

<div>
	<button type="submit" class="btn btn-primary">Login</button>
</div>
<?php
Activeform::end();

?>