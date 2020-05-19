-- Beaver Cinema DB
--
-- Host: mysql.eecs.oregonstate.edu    Database: cs340_hernager
-- ------------------------------------------------------
-- Server version	

/********************************************************
*	Data manipulations for "search.php" page
********************************************************/

-- get all information from movies using the 'movie search' form
SELECT title, price, num_in_stock, movie_rating FROM Movies WHERE title = :title_ID_selected_from_search_bar

-- get all information from movies using the 'movie search' form
SELECT title, price, num_in_stock, movie_rating FROM Movies WHERE title = :title_ID_selected_from_search_bar