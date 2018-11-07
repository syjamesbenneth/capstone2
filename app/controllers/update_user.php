<?php require_once "connect.php";
session_start();
$id=$_POST['user_id'];
$old_password=password_hash($_POST['old_password'],PASSWORD_BCRYPT);
$new_password=password_hash($_POST['new_password'],PASSWORD_BCRYPT);
$email=$_POST['email'];
$address=$_POST['address'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
//validate here guys

$update_user_query="UPDATE users SET password ='$new_password',email='$email',address='$address',firstname='$firstname',lastname='$lastname' WHERE id='$id';";
mysqli_query($conn,$update_user_query);

$reset_session_user_query = "SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($conn,$reset_session_user_query);
$_SESSION['user']=mysqli_fetch_assoc($result);//overwrites the old session variable

header("Location:../views/profile.php");
 ?>