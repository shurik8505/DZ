<?php
require "db.php";


$data = $_POST;
if(isset($data['do_login']))
{
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if($user)
	{
		//если логин существует,то проверяем пароль
		if(password_verify($data['password'],$user->password))
		{
        // все хорошо,логиним пользователя
			$_SESSION['logged_user'] = $user;
			echo '<div style="color: green;">Вы авторизованы!<br/>Можете перейти на <a href="/">главную</a> страницу!</div><hr>';
		}else
		
		{
			$errors[] = 'Неверно введён пароль!';
		}

	}else
	{
		$errors[] = 'Пользователь с таким именем не найден!';
	}
	if(!empty($errors))
	{
		
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}

}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form action="login.php" method="POST">

	<p>
		<p><strong>Логин</strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login'];?>">
    </p>

    <p>
		<p><strong>Пароль</strong>:</p>
		<input type="password" name="password" value="<?php echo @$data['password'];?>">
    </p>

    <p>
    	<button tupe="submit" name="do_login">Войти</button>
    </p>

</form>