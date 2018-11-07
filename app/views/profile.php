<?php require_once "../partials/template.php"; ?>
<?php function get_page_content() {?>
	<?php $user =$_SESSION['user']; ?>
	<?php global $conn; ?>
	<div class="container mt-2">
		<div class="row">
			<div class="col-lg-3">
				<div class="list-group" id="list-tab" role="tablist" style="background-color: #FEFFEF;">
					<a href="#profile" class="list-group-item text-center" data-toggle="list" role="tab">User Information</a>
					<a href="#history" class="list-group-item text-center" data-toggle="list" role="tab">Order History</a>				
				</div>
			</div>
			<div class="col-lg-7">
				<div class="tab-content"  style="background-color: #FEFFEF;">
					<div class="tab-pane form-control" id="profile" role="tabpanel">
						<h3 class="form-control bg-info col-lg-3 ml-3">User Information</h3>
						<form action="../controllers/update_user.php" method="POST">
							<div class="container">
								<input type="text" name="user_id" class="form-control" value="<?php echo $user['id']; ?>" hidden>
								<label class='form-control bg-warning col-lg-2'for="username">Username:</label>
								<input id="username"class="form-control" type="text" name="username" value="<?php echo $user['username']; ?>"disabled>
								<span class="validation"></span><br>

								<label class='form-control bg-warning col-lg-3' for="old_password">Old Password</label>
								<input id="old_password" type="password" name="old_password" class="form-control">
								<span class="validation"></span><br>

								<label class='form-control bg-warning col-lg-3' for="new_password">New Password</label>
								<input id="new_password" type="password" name="new_password" class="form-control">
								<span class="validation"></span><br>

								<label class='form-control bg-warning col-lg-3' for="firstname">First Name</label>
								<input id="firstname" type="text" name="firstname" value="<?php echo $user['firstname']; ?>"class="form-control">
								<span class="validation"></span><br>

								<label class='form-control bg-warning col-lg-3' for="lastname">Last Name</label>
								<input id="lastname" type="text" name="lastname" value="<?php echo $user['lastname']; ?>"class="form-control">
								<span class="validation"></span><br>

								<label class='form-control bg-warning col-lg-2' for="email">Email</label>
								<input id="email" type="text" name="email" value="<?php echo $user['email']; ?>"class="form-control">
								<span class="validation"></span><br>

								<label class='form-control bg-warning col-lg-3' for="address">Home Address</label>
								<input id="address" type="text" name="address" value="<?php echo $user['address']; ?>"class="form-control">
								<span class="validation"></span><br>

								<button type="submit" class="btn btn-info">Update Info</button>
							</div>
						</form>
					</div>
					<div class="tab-pane form-control" id="history" role="tabpanel">
						<div class="row">
							<div class="col-md-6">
								<h3>Order History</h3>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr class="text-center">
										<th>Transaction Number</th>
										<th>Purchase Date</th>
										<th>Status</th>
										<th>Payment Mode</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$order_hist_query="SELECT o.transaction_code, o.purchase_date, s.name AS status, p.name AS payment_mode FROM orders o JOIN Statuses s JOIN payment_modes p ON (o.status_id = s.id AND o.payment_mode_id = p.id) WHERE o.user_id =". $_SESSION['user']['id'];
									$transactions=mysqli_query($conn,$order_hist_query);
									foreach($transactions as $transaction){?>
										<tr>
											<td><?php echo $transaction['transaction_code']; ?>
												
											</td>
											<td><?php echo $transaction['purchase_date']; ?>			
											</td>
											<td><?php echo $transaction['status']; ?>
												
											</td>
											<td><?php echo $transaction['payment_mode']; ?>
												
											</td>
										</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } function getTitle(){
	echo "Profile";
}?>