<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>

	<!-- place checking here -->
	<!-- admin -->
	<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) { ?>

<?php global $conn; ?>
<div class="container">
	<div class="row">

		<a href="add_item.php" class="btn btn-info">Add New Item</a>
	</div>
	<div class="row">
		<?php 
		if(isset($_SESSION['message'])){
			echo "<h5>" . $_SESSION['message'] . "</h5>";
			unset($_SESSION['message']);
		 
			}
		?>
	</div>
		<div class="row">
			<?php 
				$item_query="SELECT * FROM Items";
				$items = mysqli_query($conn,$item_query);
				?>
				<table class="table table-striped">
					<thead>
						<tr class="text-center">
							<td>Item Name</td>
							<td>Item Price</td>
							<td>Item Description</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($items as $item){?>
							<tr>
								<td><?php echo $item['name']; ?></td>
								<td><?php echo $item['price']; ?></td>
								<td><?php echo $item['description']; ?></td>
								<td class="text-center">

								<a href="./edit_item.php?id=<?php echo $item['id']?>" class="btn btn-info">Edit Item</a> </td>

								<td>
								<a href="../controllers/delete_item.php?id=<?php echo $item['id']?>" class="btn btn-danger">Delete Item</a></td>
							</tr>
						 <?php }?>
					</tbody>
				</table>
		</div>
	</div>
</div>
<!-- place else statement here -->
<?php } else {
    header("Location: ./error.php");
}
?>
<?php } ?>