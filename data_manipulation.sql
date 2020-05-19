-- Beaver Cinema DB
--
-- Host: classmysql.oregonstate.edu    Database: cs340_***
-- ------------------------------------------------------

/********************************************************
*	Data manipulations for "search.php" page
********************************************************/

-- get all information from movies using the 'movie search' form
SELECT title, price, num_stock, description FROM movie WHERE title = :title_ID_selected_from_search_bar

-- get all movie information from a searched up actor using actor's first name
SELECT m.movie_id, m.title FROM m
INNER JOIN movie_actor ON movie_actor.movie_id = movie.movie_id
INNER JOIN actor ON actor.actor_id = movie_actor.actor_id
WHERE actor.first_name = :actor_ID_selected_from_search_bar
ORDER BY m.movie_id ASC;