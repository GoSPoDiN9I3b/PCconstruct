<?php 
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING); 
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING); 
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING); 


	if(strlen($login) < 5 || strlen($login) > 90) {
		echo "Логин слишком короткий";
		exit();
	} else if(strlen($name) < 3 || strlen($name) >50) {
		echo "Недопустимая длина имени";
		exit();
	}
	else if(strlen($pass) < 2 || strlen($pass) > 6) {
		echo "Недопустимая длина пароля (2-6 символов)";
		exit();
	}

	//$pass = md5($pass);

	$mysql = new mysqli('magazin.ru','root','','register-bd');
	$mysql->query("INSERT INTO `users` (`login`,`pass`,`name`) VALUES('$login','$pass','$name')");
	$mysql->close();

	header('Location: /');

 ?>