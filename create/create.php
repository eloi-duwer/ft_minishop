<html>
	<head>
		<title>creation de compte</title>
	</head>

	<body>
		<p style="text-align: center;">
		Page de creation de nouveau compte</p>
	<?PHP
	if ($_GET['error'] === 'empty')
		echo ('<p style="color: red; text-align: center">erreur: un des champs est vide </p>');
	else if ($_GET['error'] === 'username_exist')
		echo ('<p style="color: red; text-align: center">erreur: ce pseudo existe deja</p>');
	?>
		<form action="check_create.php" method="post">
			<p style="text-align: center;">
			Identifiant: <input type="text" name="login" />
			<br />
			Mot de passe: <input type="password" name="passwd" />
			<br />
			<input type ="submit" name="submit" value="OK"/>
			</p>
		</form>
	</body>
</html>
