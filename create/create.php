<?PHP

if ($_POST['login'] === "" || $_POST['passwd'] === "" || $_POST['submit'] !== 'OK')
	echo "ERROR\n";
else
{
	if (file_exists("../private") === false)
		mkdir("../private");
	if (file_exists("../private/passwd") === true)
		$tab = unserialize(file_get_contents("../private/passwd"));
	else
		$tab = array();
	foreach($tab as $id)
	{
	if ($id['login'] === $_POST['login'])
			header('Location: ./create.html');
	}
	$user['login'] = $_POST['login'];
	$user['passwd'] = hash("whirlpool", $_POST['passwd']);
	$tab[count($tab)] = $user;
	file_put_contents("../private/passwd", serialize($tab));
	header('Location: ../index.php');
}

?>
