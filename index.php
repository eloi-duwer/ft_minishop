<?PHP session_start(); ?>
<html>
<head>
	<title>ft_minishop accueil</title>
</head>

<body>
<?PHP include("top_bar.php") ?>
<p>
<?PHP
	function ft_get_products($bdd)
	{
		$ret = mysqli_query($bdd, 'SELECT * FROM product');
		return ($ret);
	}

	$_SESSION['host'] = "localhost";
	$_SESSION['user'] = "root";
	$_SESSION['pwd'] = "PnVhEhNY";
	$_SESSION['db'] = "ft_minishop";
	if (!($bdd = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pwd'], $_SESSION['db'])))
		echo "data base doesnt exist\n";
	else
		echo "database exist !\n";

	$products = ft_get_products($bdd);
	foreach ($products as $product) {
		echo $product['name'];
	}
	/*
if ($_SESSION['loggued_on_user'] !== "")
			echo "Bonjour ".$_SESSION['loggued_on_user'];
		else
			echo "Vous n'etes pas connecté";*/
?>
</p>
</body>
</html>
