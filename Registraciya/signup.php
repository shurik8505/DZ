<?php
require "db.php";


$data = $_POST;

if(isset($data['do_signup']))
{
	// здесь регистрируем

	$errors = array();
	if (trim($data['login']) == '' )
	{
		$errors[] = 'Введите логин';
	}

	if (trim($data['email']) == '' )
	{
		$errors[] = 'Введите email';
		}

		if ($data['password'] == '' )
	{
		$errors[] = 'Введите пароль';
		}

		if ($data['password_2'] != $data['password'])
	{
		$errors[] = 'Повторный пароль введён не верно!';
		}

		if(R::count('users', "login = ?", array($data['login'])) > 0 )
		{
			$errors[] = 'Пользователь с таким логином уже существует!';

		}

		if(R::count('users', "email = ?", array($data['email'])) > 0 )
		{
			$errors[] = 'Пользователь с таким email уже существует!';

		}




		if(empty($errors))
		{
			//всё хорошо,регистрируем
			$user = R::dispense('users');
			$user->surname = $data['surname'];
			$user->name = $data['name'];
			$user->father_name = $data['father_name'];
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'],PASSWORD_DEFAULT);//шифрование пароля(хеширование)
			
			R::store($user);
			echo '<div style="color: green;">Вы успешно зарегистрированы!</div><hr>';
		}else
		{
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
		
}


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form action="/signup.php" method="POST">

	<p>
		<p><strong>Фамилия</strong>:</p>
		<input type="text" name="surname" value="<?php echo @$data['surname'];?>">
    </p>
    <p>
		<p><strong>Имя</strong>:</p>
		<input type="text" name="name" value="<?php echo @$data['name'];?>">
    </p>

    <p>
		<p><strong>Отчество</strong>:</p>
		<input type="text" name="father_name" value="<?php echo @$data['father_name'];?>">
    </p>

    <p>
		<p><strong>Ваш email</strong>:</p>
		<input type="email" name="email" value="<?php echo @$data['email'];?>">
    </p>

    <p>
		<p><strong>Ваш пароль</strong>:</p>
		<input type="password" name="password" value="<?php echo @$data['password'];?>">
    </p>

    <p>
		<p><strong>Ваш пароль ещё раз</strong>:</p>
		<input type="password" name="password_2" value="<?php echo @$data['password_2'];?>">
    </p>

    <p>
		<p><strong>Ваш логин</strong>:</p>
		<input type="text" name="login" value="<?php echo @$data['login'];?>">
    </p>

    <button type="submin" name="do_signup">Зарегистрироваться</button>

      
</form>