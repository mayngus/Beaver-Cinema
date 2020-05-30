<?php

$pageTitle = "Update";

include("views/header.php");	?>

		<div class="container grid">
			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Movie Title</th>
							<th>Starring Actor ID</th>
							<th>Genre</th>
							<th>Price</th>
							<th>Rating</th>
							<th>Number in Stock</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tr>
						<td>Contagion</td>
						<td>2</td>
						<td>Drama</td>
						<td>$10.50</td>
						<td>4.4</td>
						<td>5</td>
						<td>
							<a href="#">Edit</a>
							<a href="#">Delete</a>
						</td>
					</tr>
				</table>
			</div>
	
			<?php require_once("insert.php");	?>
			<form action="insert.php" method="POST">
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" value="Enter movie title">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="number" name="price" class="form-control" value="Enter price $">
					</div>
					<div class="form-group">
						<label>Number in Stock</label>
						<input type="number" name="num_stock" class="form-control" value="Enter stock">
					</div>
					<div class="form-group">
						<label>Movie Description</label>
						<input type="text" name="movie_description" class="form-control" value="Enter movie description">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="save">Save</button>
					</div>
			</form>


			</div>
		</div>
	</div>

<?php include("views/footer.php");	?>