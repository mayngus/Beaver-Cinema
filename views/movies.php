<?php

$pageTitle = "Movie Page";

include("header.php");	?>

		<div class="container grid">
			<div class="row justify-content-center">
				<table class="table">
					<thead> Displaying All Movies
						<tr>
							<th>Movie Title</th>
							<th>Starring Actor ID</th>
							<th>Genre</th>
							<th>Price</th>
							<th>Rating</th>
							<th>Number in Stock</th>
						</tr>
					</thead>
					<tr>
						<td>Contagion</td>
						<td>2</td>
						<td>Drama</td>
						<td>$10.50</td>
						<td>4.4</td>
						<td>5</td>

					</tr>
				</table>
			</div>
		</div>
	</div>

<?php include("footer.php");	?>