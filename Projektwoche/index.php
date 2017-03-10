<?php	
	session_start();
			
	# --- TEST SETTINGS --- #
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	set_include_path(__DIR__);	#Benötigt?
	#$_SESSION['permission'] = 2;
	# ---               --- #
	
	if (!isset($_SESSION['permission'])) {	//Check for Permission 	
		header("Location: login/login.php");	//If not set --> Redir to Login Page
	}
	elseif (isset($_GET['page'])) {	//If permission is set and a page is given
		echo '<link rel="stylesheet" href="style.css">';	//import css
		require_once("functions.php");	//import functions
		$dir = scandir("pages");	//check for all available pages from "pages" folder
		$dirSize = sizeof($dir);	
		$dirList = [];	//Empty array used to store available pages
		for ($i = 0; $i < $dirSize-2; $i++) {	//Go through all pages found
			$dirList = appendList($dirList, $dir[$i+2], $_SESSION['permission']);	//append page (in right order, according to the $navPriority variable in config.php) to array 
		}
		openNavigation();	//Add html-tag initiating the navigation bar
		for ($i = 0; $i < sizeof($dirList); $i++) {
			appendNavigation($dirList[$i], ($dirList[$i]==$_GET['page']));	//Append pages from array to navigation bar, if active page --> highlight it
		}
		closeNavigation();	//close navigation html-tag
		if (in_array($_GET['page'], $dirList)) {	//If the given page is one of the available pages --> load its content
			require("pages/".$_GET['page']."/content.php");
			addBackToTopButton();	//and if set, add a back to top button
		}
		else {
			require("pages/notfound/content.php");	//If given page is not available --> load NotFound-site
		}
	}
	else {	//If permission is set but no page is given --> redir to start-page
		header("Location: /?page=start");
	}
?>
