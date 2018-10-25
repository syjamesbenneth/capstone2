<?php 
	session_start();
	function getCartCount(){
		return array_sum($_SESSION['cart']);
	}

	function getCartTotal(){
		$total = 0;
		foreach ($_SESSION['cart'] as $id => $quantity) {
			$total += $_SESSION['cart'][$id];
		}
		return array_sum($_SESSION['cart']);
	}

	// $_SESSION['cart'] -> contains the id and quantity ordered for that id
	//  the id acts as our idnex and the quantity is the lcg_value()
	// ex
	//  item 1 -> 3
	//  item 2 -> 0
	//  item 3 -> 1
	//  item 4 -> 2
	// $_SESSION['cart'] = [,3,,1,2]; first comma because we would never have item 0
	// array_sum -> php function adds all values inside the array
	// ex array_sum($_SESSION['cart']); -> 6

	$item_id = $_POST['item_id'];
	$item_quantity = $_POST['item_quantity'];

	if ($item_quantity == "0"){
		unset($_SESSION['cart'][$item_id]);
	} else {
		if(isset($_SESSION['cart'][$item_id])){
			$_SESSION['cart'][$item_id] += $item_quantity;
		
		//scenario: add 1 to item 1, then add 5 to item 1 again
		//'[,1]'
		//[,5]
		// add as there is no value
	} else {
		$_SESSION['cart'][$item_id] = $item_quantity;
		//assign as there is no value yet
	}
}

	echo getCartCount();
 ?>

