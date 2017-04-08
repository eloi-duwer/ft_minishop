<html>
	<head>
		<title>connexion</title>
	</head>

	<body>
		<p style="text-align: center;">
		Page de connexion au compte</p>
<?PHP if ($_GET['error'] === 'no_corr')
	echo ('<p style="color: red; text-align: center">Erreur: mauvais Identifiant/Mot de passe</p>');
?>
		<form action="./check_log.php" method="post">
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
