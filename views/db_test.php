<?php
	include 'db_connection.php';
	$conn = OpenCon();

	// drop table if exists
	$sql = "DROP TABLE IF EXISTS diagnostic";
	mysqli_query($conn, $sql);

	// create diagnostic table
	$sql = "CREATE TABLE diagnostic(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		text VARCHAR(255) NOT NULL
	)";
	mysqli_query($conn, $sql);

	// insert value into diagnostic
	$sql = "INSERT INTO diagnostic (text) VALUES ('MySQL is working')";
	mysqli_query($conn, $sql);

	// select the values
	$sql = "SELECT * FROM diagnostic";
	if($result = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($result) > 0){
			echo "<table>";
				echo "<tr>";
					echo "<th>id</th>";
					echo "<th>text</th>";
				echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['text'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			// Free result set
			mysqli_free_result($result);
		} else{
			echo "ERROR: No results found";
		}
	} else{
		echo "ERROR: Unable to execute $sql. " . mysqli_error($conn);
	}

	CloseCon($conn);
?>