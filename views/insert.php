<?php

	include 'db_connection.php';
	$conn = OpenCon();

	$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
	$price = mysqli_real_escape_string($conn, $_REQUEST['price']);
	$num_stock = mysqli_real_escape_string($conn, $_REQUEST['num_stock']);
	$movie_descripton = mysqli_real_escape_string($conn, $_REQUEST['movie_description']);

	$sql = "INSERT INTO Movies (title, price, num_stock, movie_description) 
			VALUES ('$title', '$price', '$num_stock', '$movie_description')";
	if(mysqli_query($conn, $sql)){
		echo "Movie added successfully.";
	} 
	else{
		echo "ERROR: Unable to execute $sql. " . mysqli_error($conn);
	}

	CloseCon($conn);

?>