<?php 
//print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';

if(trim($email) == '')
	$error = 'Введите ваш email';
else if(trim($message) == '')
	$error = 'Введите само сообщение';
else if(strlen($message)<10)
	$error = 'Сообщение должно быть более 10 символов';

if($error != '') {
	echo $error;
	exit;
}

$subject = "=?utf-8?8B?".base64_encode("Тестовое сообщение")."?=";

$headers = "From: $email\nReply-to^ $email\r\nContent-type : text/html;charset=utf-8rn";

mail('crustytheclown@bk.ru', $subject, $message, $headers);


header('Location: /about.php');

 ?>
