<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ; ?>

<?php $user = $_SESSION['user']; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<div class="list-group" id="list-tab" role="tablist">
				<a href="#profile" class="list-group-item" data-toggle="list" role="tab">User Information</a>
				<a href="#history" class="list-group-item" data-toggle="list" role="tab">Order History</a>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="tab-content">
				<div class="tab-pane" id="profile" role="tabpanel">
					<h3>User Information</h3>
					<form action="../controllers/update_user.php" method="POST">
						<div class="container">
							<input type="text" name="user_id" class="form-control" value="<?php echo $user['id'];?>" hidden>
							<label class="btn btn-lg btn-primary col-lg-3" disabled for="username">Username: </label>
							<input type="text" name="username" class="form-control" value="<?php echo $user['username'];?>" disabled>
							<span class="validation"></span><br>
							<label class="btn btn-primary btn-lg btn-block col-lg-3" for="old_password">Old Password</label>
							<input type="password" name="old_password" class="form-control">
							<span class="validation"></span><br>

							<label class="btn btn-primary btn-lg btn-block" for="new_password">New Password</label>
							<input type="password" name="new_password" class="form-control">
							<span class="validation"></span><br>

							<label class="btn btn-primary btn-lg btn-block" for="firstname">First Name</label>
							<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname'];?>" disabled>
							<span class="validation"></span><br>

							<label class="btn btn-primary btn-lg btn-block" for="lastname">Last Name</label>
							<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname'];?>" disabled>
							<span class="validation"></span><br>

							<label class="btn btn-primary btn-lg btn-block" for="email">Email Address</label>
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email'];?>" >
							<span class="validation"></span><br>

							<label class="btn btn-primary btn-lg btn-block" for="address">Address</label>
							<input type="address" class="form-control" id="address" name="address" value="<?php echo $user['address'];?>" >
							<span class="validation"></span><br>

							<button type="submit" class="btn-primary btn-success btn-lg">Update Information</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>


