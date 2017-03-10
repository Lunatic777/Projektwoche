<?php

$pdo = new PDO('mysql:host=localhost;dbname=projektwochen-db', 'root', '');

function checkPW($inputName) 
{
	$sql = "SELECT hash FROM user WHERE name = $inputName";
	if(isEmpty($sql))
	{
		$sql = "SELECT firstPW FROM user WHERE name = $inputName";
		return $sql;
	} else {
		return $sql;
	}
}

function getRights($inputName)
{
	$rights = "SELECT userID, power FROM user WHERE name = $inputName";
	$return = [];
	foreach($pdo->query($rights) as $row) {
		$return[0] = $row['userID'];
		$return[1] = $row['power'];
	} 
	return $return;	
}

print_r(getRights("GGrass"));




?>