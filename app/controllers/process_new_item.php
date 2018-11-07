<?php
session_start();
require_once "connect.php";
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$image= "../assets/images/" . $_FILES['image']['name'];
$category_id=$_POST['category_id'];

// echo $name . "<br>";
// echo $description . "<br>";
// echo $price . "<br>";
// echo $image . "<br>";
// echo $category_id . "<br>";
 
 move_uploaded_file($_FILES['image']['tmp_name'],$image);
 $new_item = "INSERT INTO Items(name,description,price,image_path,category_id)VALUES ('$name','$description','$price','$image','$category_id');";
 mysqli_query($conn,$new_item);
 mysqli_close($conn);
 header('Location:../views/catalog.php');
 ?>