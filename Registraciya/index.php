<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<meta charset="utf-8">
</html>



<?php 
if(isset($_SESSION['logged_user'])) : ?> 
	Авторизован!<br>
		<hr>
	<a href="/logout.php">Выйти</a>

<?php
else : ?>
<a href="/login.php">Авторизация</a> </br>
<a href="/signup.php">Регистрация</a>

<?php
endif; ?>