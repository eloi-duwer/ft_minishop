<?PHP

if ($_POST['login'] === "" || $_POST['passwd'] === "" || $_POST['submit'] !== 'OK')
	header('Location: ./create.php?error=empty');
else
{
	if (file_exists("../private") === false)
		mkdir("../private");
	if (file_exists("../private/passwd") === true)
		$tab = unserialize(file_get_contents("../private/passwd"));
	else
		$tab = array();
	$verif = false;
	foreach($tab as $id)
	{
		if ($id['login'] === $_POST['login'])
		{
			$verif = true;
			header('Location: ./create.php?error=username_exist');
		}
	}
	if ($verif === false)
	{
		$user['login'] = $_POST['login'];
		$user['passwd'] = hash("whirlpool", $_POST['passwd']);
		$tab[count($tab)] = $user;
		file_put_contents("../private/passwd", serialize($tab));
		header('Location: ../index.php');
	}
}

?>
