<?php

$pageTitle = "Movie Page";

include("../backend/db_connection.php");
include("header.php");	?>

		<div class="container grid">
			<div class="box title">
					<h2 class="title">Browse All Movies</h2>
					<hr>
				</div>
			<div class="box tbl-header">
				<?php
				$mysqli = OpenCon();
				$result = $mysqli->query("SELECT * FROM movies") or die($mysqli->error);

				?>
				<table class="movie-table">
					<thead>
						<tr class="header-row">
							<th>Title</th>
							<th>Price</th>
							<th>In Stock</th>
							<th>Descripition</th>
						</tr>
					</thead>
					<tbody>
					<?php
					while ($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo $row['title']; ?></td>
							<td class="center-column"><?php echo '$'; echo $row['price']; ?></td>
							<td class="center-column"><?php echo $row['num_stock']; ?></td>
							<td><?php echo $row['movie_description']; ?></td>
						</tr>
					<?php endwhile; ?>
					</tbody>
				</table>

				<?php
				function pre_r( $array ){
					echo '<pre>';
					print_r($array);
					echo '</pre>';
				}
				?>
			</div>
		</div>
	</div>

<?php include("footer.php");	?>