<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="s6.css">
</head>
<body>
    <div class="register-block">
        <p class="register-block__title">Регистрация</p>
        <form action="register.php" method="POST">
            <input type="text" name="name" class="form-text" placeholder="Имя">
            <input type="text" name="login" class="form-text" placeholder="Логин">
            <input type="password" name="password" class="form-text" placeholder="Пароль">
            <input type="password" name="password2" class="form-text" placeholder="Пароль еще раз">
            <input type="submit" value="Регистрация">
        </form>
        <p>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </p>
    </div>
    <div class="register-block">
        <p class="register-block__title">Авторизация</p>
        <form action="auth.php" method="POST">
            <input type="text" name="login" class="form-text" placeholder="Логин">
            <input type="password" name="password" class="form-text" placeholder="Пароль">
            <input type="submit" value="Авторизация">
        </form>
        <p>
            <?php
                if ($_SESSION['messageq']) {
                    echo '<p class="msg"> ' . $_SESSION['messageq'] . ' </p>';
                }
                unset($_SESSION['messageq']);
            ?>
        </p>
    </div>
</body>
</html>