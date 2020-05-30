<?php
	include("phpmyadmin/db_connection.php");
	$conn = OpenCon();

	if(isset($_POST['save'])){

		$title = $_POST['title'];
		$price = $_POST['price'];
		$num_stock = $_POST['num_stock'];
		$movie_description = $_POST['movie_description'];

		$conn->query("INSERT INTO movies (title, price, num_stock, movie_description) 
						VALUES ('$title', $price, $num_stock, '$movie_description')")
						or die($conn->error);
	}