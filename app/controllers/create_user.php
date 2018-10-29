<?php 
	require_once 'connect.php';

	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	$sql_query = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn, $sql_query);
	if (mysqli_num_rows($result) > 0){
		die("user_exists");
	} else {
		$insert_query = "INSERT INTO users(username, password, firstname, lastname, email, address) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$address');";
		$result = mysqli_query($conn, $insert_query);
	}

	mysqli_close($conn);
?>