<?php

	include 'db_connection.php';
	$conn = OpenCon();

	$title = $POST['title'];
	$price = $POST['price'];
	$num_stock = $POST['num_stock'];
	$movie_descripton = $POST['movie_description'];

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