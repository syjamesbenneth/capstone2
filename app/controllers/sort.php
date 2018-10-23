<?php 
	session_start();
	if(isset($_GET['sort'])){ //from catalog.php line 36
		if($_GET['sort'] == "asc") {
			$_SESSION['sort'] = " ORDER BY price ASC";
		} else {
			$_SESSION['sort'] = " ORDER BY price DESC";
		}
	}

	header("Location:" . $_SERVER["HTTP_REFERER"]);

	//goes to the page that called this file (catalog.php).
 ?>