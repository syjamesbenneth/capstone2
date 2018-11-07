<?php 
	session_start();
	require_once "connect.php";
	$id = $_GET['id'];
	$delete_item_query = "DELETE FROM Items WHERE id = $id;";
	echo $delete_item_query;
	$result = mysqli_query($conn, $delete_item_query);
	if(!$result) {
		$_SESSION['message'] = "Item cannot be deleted. Transaction history found.";
	} else {
		$_SESSION['message'] = "Item successfully deleted.";
	}

	mysqli_query($conn, $delete_item_query);
	mysqli_close($conn);
	header("location: ../views/items.php");
 ?>