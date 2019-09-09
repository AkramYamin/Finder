<?php 
	require 'connect.php'; //Connect To Database
	
	$mail = $pass = '';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
	$mail 		= $_POST['login-mail'];
	$pass 		=  $_POST['login-password'];
	$hashedPass = $pass;


	$stmt 	= $conn->prepare('select user_name, password from users where user_name=? and password=?');
	$stmt   ->execute(array($mail, $hashedPass));
	$count 	= $stmt->rowCount();
	if ($count == 1) {
		// Get User token
			$stmt 	= $conn->prepare('select * from users where user_name=?');
			$stmt	->execute(array($mail));
			$row 	= $stmt -> fetch();
			$tok 	= $row['user_token'];
		setcookie('fiToken', $tok, time() + (86400 * 30), "/");
		header('Location: http://emediaptuk.com/finder/comPage.php');
	}
	}
	else {
		header('Location: http://emediaptuk.com/finder/');
		exit;
	}
