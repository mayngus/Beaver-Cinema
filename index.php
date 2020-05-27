<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="public/normalize.css">
	<link rel="stylesheet" href="public/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Home Page</title>
</head>
<body>
	<div class="wrap">
		<header class="main-header">
			<div class="container c-header">
			<h1 class="name"><a href="./">Beaver Cinema</a></h1>
				<ul class="main-nav">
					<li><a href="views/search.php">Search</a></li>
					<li><a href="views/update.php">Update</a></li>
					<li class="dropdown">
						<a href="#">Browse &#9660;</a>
						<ul class="drop-nav">
							<li><a href="views/movies.php">Movies</a></li>
							<li><a href="views/actors.php">Actors</a></li>
							<li><a href="views/genres.php">Genres</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</header>

		<div class="container grid">
			<div class="box title">
				<h2 class="title">New Releases</h2>
			</div>
			<div class="box movies">
				<div class="movie-card">
					<img src="public/images/contagion.jpg" alt="contagion">
				</div>
				<div class="movie-card">
					<img src="public/images/outbreak.jpg" alt="outbreak">
				</div>
				<div class="movie-card">
					<img src="public/images/28dayslater.jpg" alt="28dayslater">
				</div>
			</div>
			<div class="box title">
				<h2 class="title">Hot Movies</h2>
			</div>
			<div class="box movies">
				<div class="movie-card">
					<img src="public/images/contagion.jpg" alt="contagion">
				</div>
				<div class="movie-card">
					<img src="public/images/outbreak.jpg" alt="outbreak">
				</div>
				<div class="movie-card">
					<img src="public/images/28dayslater.jpg" alt="28dayslater">
				</div>
			</div>
			<div class="box title">
				<h2 class="title">Pandemic Movies</h2>
			</div>
			<div class="box movies">
				<div class="movie-card">
					<img src="public/images/contagion.jpg" alt="contagion">
				</div>
				<div class="movie-card">
					<img src="public/images/outbreak.jpg" alt="outbreak">
				</div>
				<div class="movie-card">
					<img src="public/images/28dayslater.jpg" alt="28dayslater">
				</div>
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