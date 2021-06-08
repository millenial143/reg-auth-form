<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Профиль</h1>
	<div class="user-block">
		<h2 style="margin: 10px 0;"><?= $_SESSION['user']?></h2>
        <a href="index.php" class="logout">Выход</a>
	</div>
</body>
</html>