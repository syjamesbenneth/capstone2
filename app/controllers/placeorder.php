<?php 
session_start();
require_once "connect.php";
require "../vendor/autoload.php";
require "paypal/start.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;



function generate_transaction_code() {
	$ref_num = "";
	$source = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
	//we want to make a random 6 string long transaction
	for($i = 0; $i < 6; $i++) {
		$index = rand(0,15); // generates a random number from 1 to 15
		//append a random character 
		$ref_num = $ref_num . $source[$index];
	}
	//how to make suer that this doesn't repeat
	//We add something else. that never repeats. Time.
	$today = getdate(); // gets date and time
	return $ref_num . "-" . $today[0]; //today[0] is the second unix epoch
	//unix epoch - time the units started counting
}

// get all details of the order
$user_id = $_SESSION['user']['id'];
$purchase_date = date("Y-m-d G:i:s");

$status_id = 1;
$payment_mode_id = $_POST['payment_mode'];
$address = $_POST['addressLine1'];

if($payment_mode_id ==1){
	//COD payments
	$trans_code = generate_transaction_code();
	$_SESSION['trans_code'] = $trans_code;

//to check if the code works
// echo "User id" . $user_id;
// echo "Purchase date: " . $purchase_date;
// echo "Address: " . $address;
// echo "Transaction code: " . $trans_code;

//create new order by - create ehe sql statement to add a new entry in the orders table
$new_order_query = "INSERT INTO orders (user_id, transaction_code, purchase_date, status_id, payment_mode_id) VALUES ('$user_id', '$trans_code', '$purchase_date', '$status_id', '$payment_mode_id');";

$new_order = mysqli_query($conn, $new_order_query);
//we need to get the order_id of the new order created 
//to create the order details 
//to get the previously created order id->
$new_order_id = mysqli_insert_id($conn); // this looks for the most recently created id number and assigns it to $new_order_id

//populate the order_items
if($new_order) {
	//session cart is just an indexed array for quantities and each index corresponds to a specific item_id
	foreach($_SESSION['cart'] as $item_id => $qty){
		$item_query = "SELECT price FROM Items WHERE id = '$item_id';";
		$item_result = mysqli_query($conn, $item_query);
		$item = mysqli_fetch_assoc($item_result);
		
		$order_item_query = "INSERT INTO orders_items (order_id, item_id, quantity, price) VALUES ('$new_order_id', '$item_id', '$qty', '" . $item['price']. "');";
		mysqli_query($conn, $order_item_query);
		// if($ord_detail_result) {
		// 	echo "item success";
		// } else {
		// 	echo mysqli_error($conn);
		// }
	}
}
//  else {
// 	echo mysqli_error($conn);
// }

//empties the cart
unset($_SESSION['cart']);

//Send email to customer
// //import the necessary classes of phpmailer and this is 
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// //load composer's autoloader (this allows us to use any other files composer needs)
// require "../vendor/autoload.php";

//Create a new instance of phpmailer.
$mail = new PHPMailer(true);

//Email contents
$staff_email = 'capstonetuitt2@gmail.com'; // email created 
$customer_email = $_SESSION['user']['email']; // email of the user that is currently logged in

$email_subject = "Vape Izzy - Order confirmation";

$email_body = "<h3>Reference Number: $trans_code </h3> <p>Ship to $address </p> ";

//Actual sending of email
try { //server settings
	// $mail->SMTPDebug = 4; 
	// enables us to see detailed debug output;
	// will remove the messages and route us to confirmation.php
	$mail->isSMTP(); // sets mailer to user SMTP to send email
	$mail->Host = 'smtp.gmail.com'; // users gmails SMTP server
	$mail->SMTPAuth = true; // Enables SMTP Authentication
	$mail->Username = $staff_email; // defines the email's username
	$mail->Password = "tuitt_day0831"; // defines the email's pasword

	$mail->SMTPSecure = 'tls'; // Allows for TLS encryption, we can also use SSL

	$mail->Port = 587;//Port to connect to

	//recipients
	$mail->setFrom($staff_email, "Vape Izzy Admin");// sets the senders alias

	$mail->addAddress("colonelspacepenguin@gmail.com");

	//Content
	$mail->isHTML(true); // Sets email format to HTML
	$mail->Subject = $email_subject;
	$mail->Body = $email_body;
	//route user to confirmation page
	$_SESSION['new_txn_number'] = $trans_code;
	header('location: ../views/confirmation.php');

	$mail->send();
	//echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message couldn't be sent. Mailer Error ". $mail->ErrorInfo;
}
//try catch: it performs a block of code and if it fails it catches the error message


//End send email

mysqli_close($conn);


} else {

	$_SESSION['address'] = $_POST['addressLine1'];

	$payer = new Payer();
	$payer->setPaymentMethod('paypal');

	$total = 0;
	$items = [];
	foreach($_SESSION['cart'] as $id => $quantity) {
		$sql = "SELECT * FROM Items WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		$item = mysqli_fetch_assoc($result);
		extract($result);
		$total += $price * $quantity;
		$indiv_item = new Item();
		$indiv_item->setName($name)
			->setCurrency('PHP')
			->setQuantity('$quantity')
			->setPrice($price);
			$items[] = $indiv_item;
	}

	$item_list = new ItemList();
	$item_list->setItems($items);

	$amount = new Amount();
	$amount->setCurrency("PHP")
			->setTotal($total);

	$transaction = new Transaction();
	$transaction -> setAmount($amount);
				-> setItemList($item_list);
				->setDescription('Payment for Vape Izzy Purchase')
				->setInvoiceNumber(uniqid("Vapeizzyorder_"));
	$redirectUrls = new RedirectUrls();
	$redirectUrls
		->setReturnUrl('http://localhost/controllers/pay.php?success=true')
		->setCancelUrl('http://localhost/controllers/pay.php?success=false');

		$payment = new Payment();
		$payment->setIntent('sale')
		->setPayer($payer)
		->setRedirectUrls($redirectUrls)
		->setTransactions([$transaction]);

		try {
			$payment->create($paypal);
		}catch(Exception $e) {
			die($e->getData());
		}
		$approvalUrl = $payment->getApprovalLink();
		header('location: '.$approvalUrl);
}



 ?>