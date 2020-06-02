<?php
	session_start();
	include("../backend/db_connection.php");
	$conn = OpenCon();

	if(isset($_POST['submit'])){

		// set variables
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

	if(isset($_GET['delete'])){

		// set variable
		$id = $_GET['delete'];

		// begin query
		$conn->query("DELETE FROM customer
					  WHERE customer_id=$id")
					  or die($conn->error);

		// return to current page
		header('location:update.php');

		// success messages to echo at update.php
		$_SESSION['response']="SUCCESSFULLY DELETED";
		$_SESSION['res_type']="success-button";
	}

?>