<?php
	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "ecommercecapstone2"; //WHAT YOU NAMED YOUR DATABASE

	//Create connection
	$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

	//Check connection
	if(!$conn){
		die("Connection failed: ". mysqli_error($conn));
	}
?>