
<!-- <body style="background-image: url('../assets/images/bg33.jpg')";> -->

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
        <!-- /#sidebar-wrapper -->

<!-- 
<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">Vape Products</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="mods.html">Mods</a>
									<ul class="dropdown">
										<li><a href="product-detail.html">Product Detail</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="juice.html">Juice</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off on select products!</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off on selected products!</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav> -->