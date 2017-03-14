<?php
	session_start();
	require("../databaseFunctionality/LoginCheck/loginCheck.php");
	$_SESSION['name'] = (isset($_POST['name']))?$_POST['name']:"";
	if (!empty($_POST['name'])&&!empty($_POST['password'])) {  
		$hash = checkPW($_POST['name']);
		if (!empty($hash[0])) {	
			$rights = password_verify($_POST['password'], $hash[0])?getRights($_POST['name']):NULL;		
		}
		elseif (!empty($hash[1])) {
			$rights = $hash[1]==$_POST['password']?getRights($_POST['name']):NULL;
		}
		if ($rights!=NULL) {
			$_SESSION['id'] = $rights[0];
			$_SESSION['permission'] = $rights[1];
			header ("Location: /?page=start");
		}
		else {
			$_SESSION['status'] = 32;
		}
	}
	elseif (empty($_POST['name'])&&empty($_POST['password'])){$_SESSION['status'] = 22;}
	elseif (empty($_POST['name'])){$_SESSION['status'] = 21;} 
	elseif (empty($_POST['password'])){$_SESSION['status'] = 31;}
	header ("Location: login.php");
?>
