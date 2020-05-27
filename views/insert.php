<?php

	include 'db_connection.php';
	$conn = OpenCon();

	$title = $_POST['title'];
	$price = $_POST['price'];
	$num_stock = $_POST['num_stock'];
	$movie_descripton = $_POST['movie_description'];

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