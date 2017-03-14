<?php

$pdo = new PDO('mysql:host=localhost;dbname=projektwochen-db', 'root', '');

function checkPW($inputName) 
{
	#works
	global $pdo;
	$sql = "SELECT hash, firstPW FROM user WHERE username = '$inputName'";
	return $pdo->query($sql)->fetch();
	/*
	$password = $pdo->query($sql)->fetch();
	return empty($password[0])?password_hash($password[1], PASSWORD_DEFAULT):$password[0];
	*/
}

function getRights($inputName)
{
	#works
	global $pdo;
	$rights = "SELECT userID, power FROM user WHERE username = '$inputName'";
	return $pdo->query($rights)->fetch();
}

?>
