<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){?>
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2) { ?>
<?php global $conn; ?>
	<div class="container my-4">
		<div class="row">
			<div class="col-lg-12">
			<div style="background: white;">
			<h3>Your Reference Number for the order is 
			
			<?php echo $_SESSION['trans_code']; ?> </h3>
			<?php unset($_SESSION['trans_code']); ?> 
				<div style="background: white;">
				<h4>Thank you for shopping! Your order is now being processed.</h4>
				</div>
				<a href="./catalog.php" class="btn btn-primary">Continue Shopping</a>
			</div>
		</div>
	</div>
	<?php } else {
    header("Location: ./error.php");
} ?>
<?php } ?>