<?php

$pageTitle = "Home Page";

include("header.php");	?>

		<div class="container grid">
			<div>
				<span class="searchTitle">Search Movies</span>
			</div>
			<div class="search movieDb">
				<input type="text" class="searchTerm" placeholder="Enter Movie Title">
				<button type="submit" class="searchButton">
					<i class="fa fa-search">
					</i>
				</button>
			</div>
			<div>
				<span class="searchTitle">Search Actors</span>
			</div>
			<div class="search actorDb">
				<input type="text" class="searchTerm" placeholder="Enter Actor's First Name">
				<button type="submit" class="searchButton">
					<i class="fa fa-search">
					</i>
				</button>
			</div>
		</div>
	</div>


<?php include("footer.php");	?>