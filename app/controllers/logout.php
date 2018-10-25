<?php 
	//destroy all sessions

	session_start();
	session_destroy();

	//route user to landing page
	header("Location:../index.php");

 ?>