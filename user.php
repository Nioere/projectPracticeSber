<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	
	<div class="form">
		<h1><?= $_COOKIE['login'] ?></h1>
		<div class="input-form">
            <a href="php/exit.php">
			    <input type="submit" href="php/exit.php" value="Выйти">
            </a>
		</div>
	</div>

</body>
</html>