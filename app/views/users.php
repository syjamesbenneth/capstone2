<?php require_once "../partials/template.php"; ?>
<?php function get_page_content() {?>
<!-- check if there is user logged in and if the user is admin or regular user if 1 = admin 2= user -->
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id']==1) { ?>
	<?php global $conn; ?>
		<div class="container">
			<div class="row">
				<h4>User Admin Page</h4>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<table class="table table-striped">
						<thead>
							<tr>
								<td>Username</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>Email</td>
								<td>Role</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							<?php 
								$get_users_query = "SELECT u.id, u.username, u.firstname, u.lastname, u.email, r.name AS role FROM users u JOIN roles r ON (u.role_id = r.id);";
								//edit your query as needed
								$user_list = mysqli_query($conn, $get_users_query);
								foreach ($user_list as $indiv_user) {

								}
							 ?>

							 <tr>
							 	<td>
							 		<?php echo $indiv_user['username']; ?>
							 	</td>
							 	<td>
							 		<?php echo $indiv_user['firstname']; ?>
							 	</td>
							 	<td>
							 		<?php echo $indiv_user['lastname']; ?>
							 	</td>
							 	<td>
							 		<?php echo $indiv_user['email']; ?>
							 	</td>
							 	<td>
							 		<?php echo $indiv_user['role']; ?>
							 	</td>
							 	<td>
							 		<?php 
							 		$id = $indiv_user['id'];
							 		if($indiv_user['role'] == "admin")
							 		{
							 		 echo "<a href='../controllers/grant_admin.php?id=$id' class=btn btn-warning'>Revoke Admin</a>";
							 		} else {
							 			echo "<a href='../controllers/grant_admin.php?id=$id' class = 'btn btn-primary'>Make Admin </a>";
							 		}
							 		?>
							 	</td>
							 </tr>
						</tbody>
					</table>
				</div>
			</div>

			
		</div>

<?php } else {
	header("Location:./error.php");
	}	?>

<?php } ?>