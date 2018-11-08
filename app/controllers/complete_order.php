<?php 
require_once "connect.php";
$id = $_GET['id'];
$complete_order_query = "UPDATE orders set status_id = 2 WHERE ID = $id;";
mysqli_query ($conn, $complete_order_query);
header("Location: ../views/orders.php");
 ?>