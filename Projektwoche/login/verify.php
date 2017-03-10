<?php
	session_start();
	$_SESSION['name'] = (isset($_POST['name']))?$_POST['name']:"";
	if (!empty($_POST['name'])&&!empty($_POST['password'])) {{  
		$hash = checkPW($_POST['name']); 
		if (empty($hash)) {		#Wenn schüler nicht in der Datenbank vorhanden..!?	
			$_SESSION['status'] = 23;	
		}	
		else {
			if (password_verify($_POST['password'], $hash)) { 	#Fehlend: Falls nur erstPW vorhanden
				$rights = getRights($_POST['name']);
				$_SESSION['id'] = $rights[0];
				$_SESSION['permission'] = $rights[1];	 #Oder andersrum?
				header ("Location: /?page=start");
			}
			else {
				$_SESSION['status'] = 32;
			}
		}
	}
	elseif (empty($_POST['name'])&&empty($_POST['password'])){$_SESSION['status'] = 22;}
	elseif (empty($_POST['name'])){$_SESSION['status'] = 21;} 
	elseif (empty($_POST['password'])){$_SESSION['status'] = 31;}
	header ("Location: login.php");
?>
