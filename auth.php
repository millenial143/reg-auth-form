<?php

    session_start();

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $mysql = mysqli_connect("localhost", "root", "root", "register");
    
    $check_user = mysqli_query($mysql, "SELECT * FROM `register` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = $user['name'];

        header('Location: /profile.php');

    } else {
        $_SESSION['messageq'] = 'Не верный логин или пароль';
        header('Location: /');
    }
?>

