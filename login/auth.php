<?PHP

function auth($login, $passwd)
{
	$tab = unserialize(file_get_contents("../private/passwd"));
	foreach ($tab as $id)
	{
		if ($id['login'] === $login && hash("whirlpool", $passwd) === $id['passwd'])
			return (true);
	}
	return(false);
}

?>
