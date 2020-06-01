<?php
	session_start();
	include("../backend/db_connection.php");
	$conn = OpenCon();

	if(isset($_POST['submit'])){

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email_address'];

		// begin query
		$conn->query("INSERT INTO customer (first_name, last_name, address, phone, email) 
						VALUES ('$first_name', '$last_name', '$address', $phone, '$email')")
						or die($conn->error);
		
		// return to current page
		header('location:update.php');
		
		// success messages to echo at update.php
		$_SESSION['response']="SUCCESSFULLY INSERTED TO DB";
		$_SESSION['res_type']="success-button";
	}
?>