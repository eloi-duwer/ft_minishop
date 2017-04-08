<?PHP

session_start();
include("./auth.php");
if (auth($_POST['login'], $_POST['passwd']) === true)
{
	$_SESSION['loggued_on_user'] = $_POST['login'];
		header('Location: ../index.php');
}
else
{
	$_SESSION['loggued_on_user'] = "";
		header('Location: ./login.html?error=no_corr');
}

?>
