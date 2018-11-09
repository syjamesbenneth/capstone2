<?php require_once "../partials/template.php"; 
?>
<?php function get_page_content() {  ?>
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2) { ?>

<?php 	global $conn; //refers to $conn outside of my function.
?>
<style type="text/css">
	
	#thover{
		position:fixed;
		background:#000;
		width:100%;
		height:100%;
		opacity: .6;
		z-index: -3;
	}

	#tpopup{
		position:absolute;
		width:600px;
		height:180px;
		/*background:#fff;*/
		left:50%;
		top:50%;
		border-radius:5px;
		padding:60px 0;
		margin-left:-460px; /* width/2 + padding-left */
		margin-top:-1790px; /* height/2 + padding-top */
		text-align:center;
		/*box-shadow:0 0 10px 0 #000;*/
	}
	#tclose{
		position:absolute;
		background:black;
		color:white;
		right:280px;
		top:50px;
		border-radius:50%;
		width:30px;
		height:30px;
		line-height:30px;
		text-align:center;
		font-size:8px;
		font-weight:bold;
		font-family:'Arial Black', Arial, sans-serif;
		cursor:pointer;
		/*box-shadow:0 0 10px 0 #000;*/
	}
</style>
<div class="container-fluid img-fluid" id = "page-catalog">
	<div class="row">
		<div class="col-sm-2">
			<h2>Categories</h2>
			<ul class="list-group border" style="background-color: #e6e6e6;">
				<a href="catalog.php" class="category category-all">
					<li class="list-group-item">
						All
					</li>
				</a>
				<?php
				$sql_query = "SELECT * FROM Categories";
				$categories = mysqli_query($conn, $sql_query);
				foreach ($categories as $category){?>
				<a href="catalog.php?category_id=<?php echo $category['id']; ?>" class="category" data-id="<?php echo $category['id']?>">
					<li class="list-group-item catalogtext">
						<?php echo $category['name']; ?>
					</li>
				</a>
				<?php }
				?>
				
			</ul>
			<h2 class="catalogtext">Sort</h2>
			<ul class="list-group border" style="background-color: #e6e6e6;">
				<a href="../controllers/sort.php?sort=asc">
					<li class="list-group-item catalogtext" style="font-family: 'PT Sans', sans-serif; font-weight: 900;">
						Price(Lowest to Highest)
					</li>
				</a>
				<a href="../controllers/sort.php?sort=desc">
					<li class="list-group-item catalogtext" style="font-family: 'PT Sans', sans-serif; font-weight: 900;">
						Price(Highest to Lowest)
					</li>
				</a>
			</ul>
		</div>
		<div class = "col">
			<div class="container">
				<?php
				$sql_query2 = "SELECT * FROM Items";
				if(isset($_GET['category_id'])){
					$sql_query2 .= " WHERE category_id =".  $_GET['category_id'];
				}
				if(isset($_SESSION['sort'])){
					$sql_query2 .= $_SESSION['sort'];
				}
				$items = mysqli_query($conn, $sql_query2);
				echo "<div class='row'>";
				foreach ($items as $item) { ?>
				<div class="col-sm-3 py-2">
					<div class="card h-100">
						<img class="card-img-top img-fluid" src="<?php echo $item['image_path'];?>" style="height: 12rem;">
						<div class="card-body">
							<h4 class="card-title" style="font-family: 'PT Sans', sans-serif; font-weight: 900;">
								<?php echo $item['name']; ?>
							</h4>
							<p class="card-text">
								<?php echo $item['description'];?>
								<br>
								Price: <?php echo $item['price']; ?>
							</p>
						</div>
						<div class="card-footer">
							<input type="number" class="form-control" value=0>
							<button type="submit" class="btn btn-outline-primary add-to-cart" data-id="<?php echo $item['id'];?>">Add to cart</button>

							
						</div>		
					</div>
				</div>
				<?php }	echo "</div>"; ?>
			</div>
		</div>
	</div>
</div>
<div id="thover"></div>

<div id="tpopup">
	<img class="container-fluid img-fluid" style="position: absolute; float: center;"  src="../assets/images/ipvvelas.jpg" height="800"; width="700";> 

	<div id="tclose">X</div>    
</div>


<script>
// $(".fadeIn").each(function() {
//     var src = $(this).data("src");
//     if (src) {
//         var img = new Image();
//         img.style.display = "none";
//         img.onload = function() {
//             $(this).fadeIn(1000);
//         };
//         $(this).append(img);            
//         img.src = src;
//     }
// });
</script>

<script type="text/javascript">
  $(document).ready(function(){
	
  $("#thover").click(function(){
    $(this).fadeOut();
    $("#tpopup").fadeOut();
  });


  $("#tclose").click(function(){
    $("#thover").fadeOut();
    $("#tpopup").fadeOut();
  });

});

</script>
<?php } else {
	header("Location: ./error.php");
}
?>
<?php } ?>