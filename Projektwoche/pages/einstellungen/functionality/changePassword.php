<?php
	session_start();
	$_SESSION['old'] = $_POST['old'];
	if (empty($_POST['old'])){$_SESSION['status'] = 33;}
	elseif (empty($_POST['new'])){$_SESSION['status'] = 34;}
	elseif (empty($_POST['newR'])){$_SESSION['status'] = 35;}
	elseif (!password_verify($_POST['old'], '$2y$10$idZZaJf9Y3GvWtGUHIgNqOXEX/BnyDPt0f4XU0VtYiMBeaWCGVlJm'/*Get hashed password from $_SESSION['name']*/)){$_SESSION['status'] = 36;}
	elseif (!($_POST['new']==$_POST['newR'])) {$_SESSION['status'] = 37;}
	elseif (preg_match('/[^A-Za-z0-9]/',$_POST['new'])) {$_SESSION['status'] = 38;}
	else {
		unset($_SESSION['old']);
		$_SESSION['status'] = 62;
		#WRITE PASSWORD INTO DATABASE
	}
	header("Location: /?page=einstellungen");
?>
