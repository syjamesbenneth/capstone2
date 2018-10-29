<?php
	session_start();
	if(isset($_GET['sort'])){
		if($_GET['sort'] == "asc"){
			$_SESSION['sort'] = " ORDER BY price ASC";
		} else {
			$_SESSION['sort'] = " ORDER BY price DESC";
		}
	}
	// echo "Location: " . $_SERVER["HTTP_REFERER"];
	header("Location: " . $_SERVER["HTTP_REFERER"]);
	//goes to the page that called this file.
?>