<?php

$pageTitle = "Update";

include("header.php");	?>

		<div class="container grid">
			<h1>Update Database</h1>
			<div class="tbl-header">
			<table>
				<thead>
					<tr>
						<th>Blank</th>
						<th>Blank</th>
						<th>Blank</th>
						<th>Blank</th>
						<th>Blank</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
					</tr>
					<tr>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
					</tr>
					<tr>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
						<td>Blank</td>
					</tr>
				</tbody>
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

<?php include("footer.php");	?>