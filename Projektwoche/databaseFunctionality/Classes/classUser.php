<?php
//definition of class User

class User {
	//definition of information variables
	public $ID
	public $vorname
	public $nachname
	public $klasse
	public $erstpasswort
	public $gebDat
	public $schulform
	public $power
	public $einwahlStatus
}

//assignment of values to the variables from the DB

/*	connection to DB
	selection of data for variable $ID
	save data into $ID
	return $ID
*/ 

$pdo = new PDO('mysql:host=localhost;dbname=projektwochen-db', 'root', '');
$

/** NOTE:differentiation between teacher and student by $power
/*  power 1 -> student
/*  power 2 -> teacher
/*  power 3 -> administrator
**/
?>