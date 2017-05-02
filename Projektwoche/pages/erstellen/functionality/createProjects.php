<?php
	session_start();
	$_SESSION['proName'] = $_POST['proName'];
	$_SESSION['proB'] = $_POST['proB'];
	$_SESSION['lehr'] = $_POST['lehr'];
	$_SESSION['minS'] = $_POST['minS'];
	$_SESSION['maxS'] = $_POST['maxS'];
	$_SESSION['minJahr'] = $_POST['minJahr'];
	$_SESSION['maxJahr'] = $_POST['maxJahr'];
	$_SESSION['geschlecht'] = $_POST['geschlecht'];
	$_SESSION['gym'] = isset($_POST['gym'])?"":"unsetPenis";
	$_SESSION['real'] = isset($_POST['real'])?"":"unsetPenis";
	$_SESSION['haupt'] = isset($_POST['haupt'])?"":"unsetPenis";
	if(isset($_POST['proName'])
		&& isset($_POST['proB'])
		&& isset($_POST['lehr'])
		&& isset($_POST['minS']) /* eventuell rausnehmen, noch nicht geklärt */
		&& isset($_POST['maxS'])
		&& isset($_POST['minJahr'])
		&& isset($_POST['maxJahr'])
		&& isset($_POST['geschlecht']) #steht auch noch nicht fest, IDIOT!
		&& (isset($_POST['gym']) || isset($_POST['real']) || isset($_POST['haupt']))){
		$aff = $_POST['gym'].$_POST['real'].$_POST['haupt'];
		require("databaseFunctionality/Projects/insertPData.php");	
		insertPData($_POST['proName'], $_POST['proB'],$_POST['maxS'], $_POST['lehr'], $_POST['minJahr'], $_POST['maxJahr'], $aff);
	}
	else {
		$_SESSION['status'] = 69;
	}
	header("Location: /?page=erstellen");
?>
