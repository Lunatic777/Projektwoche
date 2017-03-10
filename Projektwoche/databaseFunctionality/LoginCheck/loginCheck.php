<?php

$pdo = new PDO('mysql:host=localhost;dbname=projektwochen-db', 'root', '');

function checkPW($inputName) 
{
	#works
	global $pdo;
	$sql = "SELECT hash, firstPW FROM user WHERE nutzerName = '$inputName'";
	$password = $pdo->query($sql)->fetch();
	return empty($password[0])?$password[1]:$password[0];
}

function getRights($inputName)
{
	#works
	global $pdo;
	$rights = "SELECT userID, power FROM user WHERE nutzerName = '$inputName'";
	return $pdo->query($rights)->fetch();
}

?>