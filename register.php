<?php
session_start();

$name = $_POST['name'];
$login = $_POST['login'];
$password = md5($_POST['password']);
$password2 = md5($_POST['password2']);


if (strlen($login) < 5 || strlen($login) > 29){
	$_SESSION['message'] = 'Недопустимая длина логина';
}else if (strlen($name) < 3 || strlen($name) > 29){
	$_SESSION['message'] = "Недопустимая длина имени";
}else if (strlen($_POST['password']) < 3 || strlen($_POST['password']) > 29){
	$_SESSION['message'] = "Недопустимая длина пароля";
}else if ($password != $password2){
	$_SESSION['message'] = "Пароли не совпадают";
}else{
	$mysql = mysqli_connect("localhost", "root", "root", "register");


	$query = "INSERT INTO `register` (`login`, `password`, `name`)
	VALUES('$login', '$password', '$name')";

	$qResult = mysqli_query($mysql, $query);


}


	header('Location: /');


?>

