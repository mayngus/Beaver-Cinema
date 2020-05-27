<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../public/normalize.css">
	<link rel="stylesheet" href="../public/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Home Page</title>
</head>
<body>
	<div class="wrap">
		<header class="main-header">
			<div class="container c-header">
			<h1 class="name"><a href="../index.php">Beaver Cinema</a></h1>
				<ul class="main-nav">
					<li><a href="../views/search.php">Search</a></li>
					<li><a href="../views/update.php">Update</a></li>
					<li class="dropdown">
						<a href="#">Browse &#9660;</a>
						<ul class="drop-nav">
							<li><a href="../views/movies.php">Movies</a></li>
							<li><a href="../views/actors.php">Actors</a></li>
							<li><a href="../views/genres.php">Genres</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</header>

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
		
			<div class="row justify-content-center">
			<form action="" method="POST">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="movie_title" class="form-control" value="Enter movie title">
				</div>
				<div class="form-group">
					<label>Actor ID</label>
					<input type="text" name="movie_genre" class="form-control" value="Enter actor ID">
				</div>
				<div class="form-group">
					<label>Genre</label>
					<input type="text" name="movie_price" class="form-control" value="Enter genre">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="movie_rating" class="form-control" value="Enter $">
				</div>
				<div class="form-group">
					<label>Rating</label>
					<input type="text" name="movie_rating" class="form-control" value="Enter rating (0.0)">
				</div>
				<div class="form-group">
					<label>Number in Stock</label>
					<input type="text" name="movie_rating" class="form-control" value="Enter number">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save">Save</button>
				</div>
			</form>

			<form action="insert.php" method="post">
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" value="Enter movie title">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" value="Enter $">
					</div>
					<div class="form-group">
						<label>Number in Stock</label>
						<input type="text" name="num_stock" class="form-control" value="Enter number">
					</div>
					<div class="form-group">
						<label>Movie Description</label>
						<input type="text" name="movie_description" class="form-control" value="Enter number">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="save">Add</button>
					</div>
			</form>


			</div>
		</div>
	</div>


	<footer class="main-footer">
	<div class="container">
		<ul>
			<li><a href="#" class="social twitter">Twitter</a></li>
			<li><a href="#" class="social facebook">Facebook</a></li>
			<li><a href="#" class="social instagram">Instagram</a></li>
		</ul>
		<span class="copyright">Copyright &copy; Hernandez & Mayinger</span>
	</div>
	</footer>
</body>
</html>