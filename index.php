<?PHP session_start(); ?>
<html>
<head>
	<title>ft_minishop accueil</title>
</head>

<body>
<?PHP include("top_bar.php") ?>
<p>
<?PHP	if ($_SESSION['loggued_on_user'] !== "")
			echo "Bonjour ".$_SESSION['loggued_on_user'];
		else
			echo "Vous n'etes pas connecté";
?>
</p>
</body>
</html>
