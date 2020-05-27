<?php

	include 'db_connection.php';
	$conn = OpenCon();

	if(isset($_POST['save'])){

		$title = $_POST['title'];
		$price = $_POST['price'];
		$num_stock = $_POST['num_stock'];
		$movie_descripton = $_POST['movie_description'];

		$mysqli->query("INSERT INTO Movies (title, price, num_stock, movie_description) 
						VALUES ('$title', '$price', '$num_stock', '$movie_description')")
						or die($mysqli->error);

	}

	//CloseCon($conn);

?>