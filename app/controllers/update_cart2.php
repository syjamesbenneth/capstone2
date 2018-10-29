

 <?php
	session_start();
	function getCartCount(){
		return array_sum($_SESSION['cart']);
	}

	function getCartTotal(){
		$total = 0;
		foreach($_SESSION['cart'] as $id => $quantity){
			$total += $_SESSION['cart'][$id];
		}
		return array_sum($_SESSION['cart']);
	}

	$item_id = $_POST['item_id']; 

	if(isset($_POST['item_quantity'])){
		$item_quantity = $_POST['item_quantity'];

		if($item_quantity == "0"){
			unset($_SESSION['cart'][$item_id]);
		}
	}

	if(isset($_POST['quantity'])){
		$quantity = $_POST['quantity'];
		
		$update_flag = false;
	
		if(isset($_SESSION['cart'][$item_id] )){
			$update_flag = $_POST['update_flag'];
			if($update_flag > 0){
				$_SESSION['cart'][$item_id] = $quantity;
			} else{
				$_SESSION['cart'][$item_id] += $quantity;
			}
			//add as there is now value.
		} else {
			$_SESSION['cart'][$item_id] = $quantity;
			//assign as there is no value yet.
		}
	}



	echo getCartCount();

?>