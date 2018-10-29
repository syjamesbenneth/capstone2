<?php session_start(); ?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<!-- Jquery -->
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  	<!-- popper -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- browser icon -->
	<link rel="icon" type="image/png" href="./assets/images/libro_logo.jpg" sizes="32x32" />
	<!-- bootstrap css cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- custom css -->
<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../assets/styles/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../assets/styles/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="../assets/styles/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../assets/styles/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../assets/styles/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../assets/styles/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../assets/styles/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/styles/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="../assets/styles/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<!-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> -->

	<!-- Theme style  -->
	<link rel="stylesheet" href="../assets/styles/style.css">

	
<head>
	<title>Vape Izzy</title>
</head>
<body>
	<?php require_once "header.php"; 
	require_once "../controllers/connect.php"; ?>
	 <?php get_page_content(); 
	 mysqli_close($conn); ?>
	 <?php require_once "footer.php" ?>
</body>
</html>