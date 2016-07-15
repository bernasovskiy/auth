<?php
	session_start();
	require_once '/models/user.php';

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

	$user = new User();

	$login = trim(strip_tags($_POST['login']));
	$password = trim(strip_tags($_POST['password']));
	$email = trim(strip_tags($_POST['email']));

	$types = array("image/gif", "image/png", "image/jpg", "image/jpeg"); // массив разрешенных форматов
	$path = 'public/avatars/'; // директория для загрузки
	$full_path = $path.time().'.'.$_FILES['img_path']['name']; // полный путь с новым именем и расширением


	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if ($user->get_user_by_username($login))
		{
			if ($_SESSION['lang']=ru)
			{
				$err = 'Извините, этот логин уже занят';
			}
			else
			{
				$err = 'Sorry, login allready exists';
			}
		}
		elseif (!in_array($_FILES['img_path']['type'], $types))
		{
			if ($_SESSION['lang']=ru)
			{
				$err = 'Извините, к загрузке разрешены только файлы GIF, PNG и JPG';
			}
			else
			{
				$err = 'Sorry, we only accept GIF, PNG and JPG images';
			}
		}
		else
		{
			if($_FILES['img_path']['error'] == 0)
			{
				copy($_FILES['img_path']['tmp_name'], $full_path);
			}
			$user->create($login, $password, $email, $full_path);
			header('Location: /');
		}
	}

	require_once ('/view/'.$_SESSION['lang'].'/register.php');