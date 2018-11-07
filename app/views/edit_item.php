<?php require_once "../partials/template.php";?>
<?php function get_page_content() {?>
	<?php global $conn;
	$item_id=$_GET['id']; 
	$edit_item_query="SELECT * FROM Items WHERE id = $item_id;";
	$result=mysqli_query($conn,$edit_item_query);
	$item=mysqli_fetch_assoc($result);
	?>
	
	<div class="container">
		<h3 class="form-control bg-info col-lg-2 mt-2 text-center">Edit Item</h3>
		<div class="row ">
			<div class="col-lg-8 offset-lg-2 form-control">
				<form action="../controllers/process_edit_item.php" method="POST" enctype=multipart/form-data>
					<input type="number" name="id" value="<?php echo $item_id; ?>" hidden>
					<div class="form-group">
						<label for="name">Name: </label>
						<input type="text" name="name" class="form-control" id="name" value="<?php echo $item['name']; ?>"required>
					</div>

					<div class="form-group">
						<label for="price">Price: </label>
						<input type="number" name="price" class="form-control" id="price" min="1" value="<?php echo $item['price']; ?>"required>
					</div>

					<div class="form-group">
						<label for="description">Description: </label>
						<textarea class="form-control col-12" rows="5" id="description"name="description"><?php echo $item['description'];?>		
					</textarea>
				</div>

				<div class="form-group">
					<label for="categories">Categories: </label>
					<select class="form-control" required id="categories" name="category_id">
						<?php 
						$sql= "SELECT * FROM Categories"; 
						$categories = mysqli_query($conn,$sql);
						foreach($categories as $category){
							extract($category);
								$selected = $item['category_id']==$id ? 'selected' : '';//ternary operator:short hand for an if else statement
								//syntax: conditon? value if true: value if false
								//if($item['category_id']==$id){
									//$selected = "selected";
								//}else{
									//$selected="";
								//}
								echo "<option value=$id>$name</option>";
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="image">Image: </label>
						<input type="file" class="form-control" name="image" id="image required">
					</div>
					<button type="submit" class="btn btn-info form-group">Edit Item</button>
				</form>
			</div>
		</div>
	</div>

<?php }
function getTitle(){
	echo "Edit Item";
}?>