

<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
	<a class="navbar-brand" href="../index.php">Vape Izzy</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse text-right" id="navbar">
		<ul class="navbar-nav ml-auto">
		<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2)){ ?>
	
	
		<li class="nav-item">
			<a class="nav-link" href="../views/catalog.php">
				Catalog
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="../views/cart.php">
				Cart <span class="badge bg-light text-dark" id="cart-count">
					<?php if(isset($_SESSION['cart'])){
						echo array_sum($_SESSION['cart']);
					} else {
						echo 0;
					} ?>
				</span>
			</a>
		</li>
		<?php } elseif(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 1) { ?> 

	
	<li class="nav-item">
			<a class="nav-link" href="../views/items.php">
				Items Admin
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="../views/users.php">
				Users Admin
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="../views/orders.php">
				Orders Admin
			</a>
		</li>
		<?php } ?>
		<?php if(!isset($_SESSION['user'])) {?>
		<li class="nav-item">
			<a class="nav-link" href="../views/login.php">Login</a>
		</li>
		<li class="nav-item">
				<a class="nav-link" href="../views/register.php">Register</a>
			</li>
			<?php } else { ?>
			<li class = "nav-item">
				<a href="../views/profile.php" class="nav-link">
					Welcome, <?php echo $_SESSION['user']['firstname'] ?>
				</a>
			</li>
			<li class = "nav-item">
				<a href="../controllers/logout.php" class="nav-link" id="logout">
					Logout
				</a>
			</li>
		<?php } ?>
		</ul>
	</div>

</nav> 
</body>
 <hr>
 <hr>
