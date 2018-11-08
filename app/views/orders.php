<?php require_once "../partials/template.php"; ?>
<?php function get_page_content() {
	if(isset($_SESSION['user']) && $_SESSION['user']['role_id']==1){
		global $conn; ?>

		<div class="container">
			<div class="row">
				<h4>Order Admin Page</h4>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<table class="table table-striped">
						<thead>
							<tr>
								<td>Transaction Code</td>
								<td>Status</td>
								<td>Actions</td>
							</tr>
						</thead>
						<tbody>
							<?php
							$order_query = "SELECT o.id,o.transaction_code, s.name AS status FROM orders o JOIN Statuses s ON (o.status_id = s.id);";
							$orders=mysqli_query($conn,$order_query);
							foreach($orders as $indiv_order) {?>
								<tr>
									<td><?php echo $indiv_order['transaction_code']; ?></td>
									<td><?php echo $indiv_order['status']; ?></td>
									<td><?php if($indiv_order['status']=="pending") {?>
										<a href="../controllers/complete_order.php?id=<?php echo $indiv_order['id']; ?>" class="btn btn-success">Complete Order
										</a>
										<a href="../controllers/cancel_order.php?id=<?php echo $indiv_order['id']; ?>" class="btn btn-danger">Cancel Order
										</a><?php } ?>
									</td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<?php }else{
		header("Location:./error.php");
	} ?>

<?php }function getTitle(){
   echo "Order";
} ?>