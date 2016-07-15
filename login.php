<?php
	session_start();

	require './models/user.php';

	$login = trim(strip_tags($_POST['login']));
	$password = trim(strip_tags($_POST['password']));

	$user = new User();

	if (isset($login) && isset($password)) {
		$res = $user->get($login, $password);

		if ($res) {
			$_SESSION['login'] = $res['login'];

			header('Location: /');
		} else {
			$err = 'Не верный логин или пароль';
			header('Location: /');
		}
	}
