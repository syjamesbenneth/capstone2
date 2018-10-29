<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn; ?>
	<div class= "container my-4">
		<div class="row">
			<div class="col-lg-12">
				<h1>Cart page</h1>
			</div>
		</div>
		<hr>
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="cart-items">
				<thead>
					<tr class="text-center">
						<th>Item Name</th>
						<th>Item Price</th>
						<th>Item Quantity</th>
						<th>Item Subtotal</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(count($_SESSION['cart'])!=0){
							$cart_total = 0;
							foreach($_SESSION['cart'] as $id => $qty){
								$sql_query = "SELECT * FROM Items WHERE id = '$id';";
								$itemInfo = mysqli_query($conn, $sql_query);
								$item = mysqli_fetch_assoc($itemInfo);
								$subTotal = $_SESSION['cart'][$id] * $item['price'];
								$cart_total += $subTotal;
							?>
							<tr><td class="item_name align-middle"><?php echo $item['name']; ?></td>
							<td class="item_price text-right align-middle"><?php echo $item['price']; ?></td>
							<td class="item_quantity align-middle"><input type="number" value="<?php echo $qty; ?>" class="form-control text-right align-middle mx-auto" min="1" style="width:150px" data-id="<?php echo $id; ?>"></td>
							<td class="item_subtotal text-right align-middle"><?php echo $subTotal; ?></td>
							<td class="item_action text-center align-middle"><button class="btn btn-danger item-remove" data-id="<?php echo $id; ?>">Remove from Cart</button></td></tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td class="text-right font-weight-bold align-middle" colspan="4">Total</td>
						<td class="text-right font-weight-bold align-middle" id="total_price">
							<?php 
							echo $cart_total;
							?>
						</td>
					</tr>
					<tr>
						<td>
							<a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a>
						</td>
					</tr>
				</tfoot>
				<?php
				} else { 
					echo "<tr><td class='text-center' colspan='6'> No Items in Cart </tr></td>";
				} ?>
			</table>
		</div>
	</div>
<?php  } ?>