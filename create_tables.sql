-- Beaver Cinema DB
--
-- Host: mysql.eecs.oregonstate.edu    Database: cs340_hernager
-- ------------------------------------------------------
-- Server version	

--
-- Table structure for table `Customer`
--
DROP TABLE IF EXISTS Customer;
CREATE TABLE Customer(
	customerID int AUTO_INCREMENT UNIQUE PRIMARY KEY,
	cust_first_name varchar(255) NOT NULL,
	cust_last_name varchar(255) NOT NULL,
	cust_street varchar(255) NOT NULL,
	cust_city varchar(255) NOT NULL,
	cust_state varchar(255) NOT NULL,
	cust_zip int NOT NULL,
	cust_phone int NOT NULL,
	cust_email varchar(255) NOT NULL,
	CONSTRAINT full_name UNIQUE (cust_first_name, cust_last_name)
);

--
-- Dumping data for table `Customer`
--
INSERT INTO Customer (cust_first_name, cust_last_name, cust_street, cust_city, cust_state, cust_zip, cust_phone, cust_email) 
VALUES ('Jimmy', 'John', '4134 Monroe Ave', 'Corvallis', 'OR', 97330, 5034150290, 'jjohn@gmail.com');

--
-- Table structure for table `Orders`
--
DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders(
	orderID int AUTO_INCREMENT UNIQUE PRIMARY KEY,
	customerID int AUTO_INCREMENT,
	credit_number int NOT NULL,
	credit_exp int NOT NULL,
	order_date DATE NOT NULL,
	delivery varchar(255) NOT NULL,
	FOREIGN KEY (customerID) REFERENCES Customer (customerID)
);

--
-- Dumping data for table `Orders`
--
INSERT INTO Orders (customerID, credit_number, credit_exp, order_date, delivery) VALUES (
	(SELECT customerID FROM Customer WHERE cust_first_name='Jimmy' AND cust_last_name='John'),
	1234567812345678,
	0824,
	'2020-01-02',
	'Delivery'
);

--
-- Table structure for table `Movie_Orders`
--
DROP TABLE IF EXISTS Movie_Orders;
CREATE TABLE Movie_Orders(
	ordersID int AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
	moviesID varchar(255) NOT NULL,
	quantity int DEFAULT NOT NULL,
	total_price int DEFAULT NOT NULL
);

--
-- Table structure for table `Movies`
--
DROP TABLE IF EXISTS Movies;
CREATE TABLE Movies(
	movieID int AUTO_INCREMENT UNIQUE PRIMARY KEY,
	title varchar(255) NOT NULL,
	price varchar(255) NOT NULL,
	num_in_stock int DEFAULT NULL,
	movie_rating int DEFAULT NULL,
);

--
-- Dumping data for table `Movies`
--
INSERT INTO Movies (price, num_in_stock, movie_rating) VALUES (4.95, 23, 4.8); 

--
-- Table structure for table `Movie_Actors`
--
DROP TABLE IF EXISTS Movie_Actors;
CREATE TABLE Movie_Actors(
	movieID int(11) NOT NULL DEFAULT '0',
	actorID int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (movieID, actorID),
	FOREIGN KEY (movieID) REFERENCES Movies (movieID),
	FOREIGN KEY (actorID) REFERENCES Actors (actorID),
);

--
-- Table structure for table `Actors`
--
DROP TABLE IF EXISTS Actors;
CREATE TABLE Actors(
	actorID int AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
	actor_name varchar(255) NOT NULL
);

--
-- Dumping data for table `Actors`
--
INSERT INTO Actors (actor_name) VALUES ('Evelyn Hancock');

--
-- Table structure for table `Movie_Genres`
--
DROP TABLE IF EXISTS Movie_Genres;
CREATE TABLE Movie_Genres(
	movieID int(11) NOT NULL DEFAULT '0',
	genreID int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (movieID, genreID),
	FOREIGN KEY (movieID) REFERENCES Movies (movieID),
	FOREIGN KEY (genreID) REFERENCES Actors (genreID),
);

--
-- Table structure for table `Genres`
--
DROP TABLE IF EXISTS Genres;
CREATE TABLE Genres(
	genreID int AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
	genre_type varchar(255) NOT NULL
);

--
-- Dumping data for table `Genres`
--
INSERT INTO Genres (genre_type) VALUES ('Comedy');


