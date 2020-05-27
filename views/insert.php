<?php

	include 'db_connection.php';
	$conn = OpenCon();

	$sql = "INSERT INTO Movies (title, price, num_stock, movie_descripton) 
			VALUES ('$title', '$price', '$num_stock', '$movie_descripton')";
	if(mysqli_query($conn, $sql)){
		echo "Movie added successfully.";
	} 
	else{
		echo "ERROR: Unable to execute $sql. " . mysqli_error($conn);
	}

	CloseCon($conn);

?>