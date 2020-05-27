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
					<thead> Displaying All Genres
						<tr>
							<th>Genre ID</th>
							<th>Genre</th>
						</tr>
					</thead>
					<tr>
						<td>1</td>
						<td>Drama</td>
					</tr>
				</table>
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