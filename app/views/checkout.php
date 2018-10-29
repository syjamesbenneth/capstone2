<?php require_once "../partials/template.php";
function get_page_content(){
	global $conn; ?>
	<?php
		if (!isset($_SESSION['user'])){
			header("Location: login.php");
		}
	?>
	<h1>This is the checkout page</h1>
	<form method="POST" action="../controllers/placeorder.php">
		<!-- TODO: placeorder.php controller -->
		<div class="container">
			<div class="row mt-4">
				<div class="col-sm-8">
					<h4>Shipping address</h4>
					<div class="form-group">
						<input type="text" class="form-control" name="addressLine1" placeholder="Address Line 1">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="addressLine2" placeholder="Address Line 2">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="addressLine3" placeholder="Address Line 3">
					</div>
				</div>
			</div>
			<div class="row">
				<h4>Order Summary</h4>
			</div>
			<div class="row">
				<div class="col-sm-6"><p>Total</p></div>
				<div class="col-sm-6" id="total_price">
					<?php
					$cart_total=0;
					foreach($_SESSION['cart'] as $id => $qty){
						$sql_query = "SELECT * FROM Items WHERE id = $id;";
						$itemInfo = mysqli_query($conn, $sql_query);
						$item = mysqli_fetch_assoc($itemInfo);

						$subTotal = $_SESSION['cart'][$id] * $item['price'];
						$cart_total += $subTotal;
					}
					echo $cart_total;
					?>
				</div>
			</div>
			<hr>
			<button type="submit" class="btn btn-primary d-block">Place Order Now</button>
			<div class="row cart-items mt-4">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="cart-items">
						<thead>
							<tr class="text-center">
								<th colspan="2">Item Name</th>
								<th>Item Price</th>
								<th>Item Quantity</th>
								<th>Item Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($_SESSION['cart'] as $id => $qty){
								$sql_query = "SELECT * FROM Items WHERE id = $id;";
								$itemInfo = mysqli_query($conn, $sql_query);
								$item = mysqli_fetch_assoc($itemInfo);
							?>
							<td class="item_name align-middle" colspan="2"><?php echo $item['name']; ?></td>
							<td class="item_price align-middle"><?php echo $item['price']; ?></td>
							<td class="item_quantity align-middle"><?php echo $qty; ?></td>
							<td class="item_subtotal">
								<?php echo $qty * $item['price']; ?>
							</td>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</form>
<?php }?>