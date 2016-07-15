<?
	session_start();
	require_once '/models/user.php';

	$lang = array('en', 'ru'); // Все существующие языки.

	if (!isset($_SESSION['lang']) || $_GET['lang']=="en")
	{
		// eng
		$_SESSION['lang']=en;
	}
	else
	{
		// rus
		$_SESSION['lang']=ru;
	}

	echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";

	if (isset($_SESSION['login']))
	{
		$user = $_SESSION['login'];
	}

	switch ($user) {
	case '':
		require_once ('/view/'.$_SESSION['lang'].'/index.php');
		break;

	default:
		require_once ('/view/'.$_SESSION['lang'].'/welcome.php');
		break;
	}