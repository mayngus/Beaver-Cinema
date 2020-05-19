-- Beaver Cinema DB
--
-- Host: classmysql.oregonstate.edu    Database: cs340_***
-- ------------------------------------------------------

--
-- Table structure for table `customer`
--
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
	`customer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`first_name` varchar(45) NOT NULL,
	`last_name` varchar(45) NOT NULL,
	`street` int(11) unsigned NOT NULL,
	`city` varchar(50) DEFAULT NULL,
	`state` varchar(50) DEFAULT NULL,
	`zip` int(11) unsigned NOT NULL,
	`phone` varchar(50) DEFAULT NULL,
	`email` varchar(50) DEFAULT NULL,
	PRIMARY KEY (`customer_id`),
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `customer`
--
LOCK TABLES `customer` WRITE;
INSERT INTO `customer` VALUES (1,'Jimmy', 'John', '4134 Monroe Ave', 'Corvallis', 'OR', 97330, 5034150290, 'jjohn@gmail.com'), (2,'Carla', 'Ruiz', '4153 Jefferson Ave', 'Portland', 'OR', 97230, 5034150146, 'carlaruiz@gmail.com'), (3,'Joseph', 'McTavern', '2351 Paola Drive', 'Beaverton', 'OR', 97204, 5034150913, 'josephtavern@gmail.com'), (4,'Miguel', 'Espinoza', '12315 Stark Street', 'Gresham', 'OR', 97033, 5039310492, 'migueltheking@gmail.com'), (5,'Leonardo', 'Robertson', '1951 Stone Drive', 'Portland', 'OR', 97230, 5034157592, 'leonardoception@gmail.com');
UNLOCK TABLES;

--
-- Table structure for table `orders`
--
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
	`order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`customer_id` int(11) unsigned NOT NULL,
	`credit_number` int(11) NOT NULL,
	`credit_exp` int(11) NOT NULL,
	`order_date` datetime NOT NULL,
	`delivery` varchar(255) NOT NULL
	PRIMARY KEY (`order_id`),
	CONSTRAINT `fk_order_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE,
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `orders`
--
INSERT INTO `orders` (customer_id, credit_number, credit_exp, order_date, delivery) VALUES (
	(SELECT customer_id FROM customer WHERE first_name='Jimmy' AND last_name='John'),
	1234567812345678,
	0824,
	'2020-01-02',
	'Delivery'
);

--
-- Table structure for table `movie`
--
DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
	`movie_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`order_id` int(11) unsigned NOT NULL,
	`title` varchar(255) NOT NULL,
	`price` decimal(5,2) NOT NULL DEFAULT '5.99',
	`num_stock` int(11) unsigned DEFAULT NULL,
	`movie_description` text,
	PRIMARY KEY (`movie_id`),
	CONSTRAINT `fk_movie_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON UPDATE CASCADE,
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `movie`
--
LOCK TABLES `movie` WRITE;
INSERT INTO `movie` VALUES (1, 1, 'Contagion', 7.99, 5, 'A virus unleashes onto an unprepared world.');
UNLOCK TABLES;

--
-- Table structure for table `movie_orders`
--
DROP TABLE IF EXISTS `movie_orders`;
CREATE TABLE `movie_orders` (
	`movie_id` int(11) unsigned NOT NULL,
	`order_id` int(11) unsigned NOT NULL,
	PRIMARY KEY (`movie_id`,`order_id`),
	CONSTRAINT `fk_movie_order_movie` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON UPDATE CASCADE
	CONSTRAINT `fk_order_movie_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON UPDATE CASCADE,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `movie_orders`
--
LOCK TABLES `movie_orders` WRITE;
INSERT INTO `movie_orders` VALUES (1,1),(1,2);
UNLOCK TABLES;

--
-- Table structure for table `actor`
--
DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
	`actor_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`first_name` varchar(45) NOT NULL,
	`last_name` varchar(45) NOT NULL,
	PRIMARY KEY (`actor_id`),
	KEY `idx_actor_first_name` (`first_name`)
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `actor`
--
LOCK TABLES `actor` WRITE;
INSERT INTO `actor` VALUES (1,'Evelyn','Hancock');
UNLOCK TABLES;

--
-- Table structure for table `movie_actors`
--
DROP TABLE IF EXISTS `movie_actors`;
CREATE TABLE `movie_actors` (
	`movie_id` int(11) unsigned NOT NULL,
	`order_id` int(11) unsigned NOT NULL,
	PRIMARY KEY (`movie_id`,`order_id`),
	CONSTRAINT `fk_movie_actor_movie` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON UPDATE CASCADE
	CONSTRAINT `fk_actor_movie_actor` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`actor_id`) ON UPDATE CASCADE,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `movie_actors`
--
LOCK TABLES `movie_actors` WRITE;
INSERT INTO `movie_actors` VALUES (1,1), (1,2);
UNLOCK TABLES;

--
-- Table structure for table `genre`
--
DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
	`genre_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
	`genre_name` varchar(25) NOT NULL,
	PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=300 DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `genre`
--
LOCK TABLES `genre` WRITE;
INSERT INTO `genre` VALUES (1,'Action'),(2,'Comedy');
UNLOCK TABLES;

--
-- Table structure for table `movie_genres`
--
DROP TABLE IF EXISTS `movie_genres`;
CREATE TABLE `movie_genres` (
	`movie_id` int(11) unsigned NOT NULL,
	`genre_id` int(11) unsigned NOT NULL,
	PRIMARY KEY (`movie_id`,`genre_id`),
	CONSTRAINT `fk_movie_genre_movie` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON UPDATE CASCADE
	CONSTRAINT `fk_genre_movie_genre` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON UPDATE CASCADE,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Insertion queries for table `movie_genres`
--
LOCK TABLES `movie_genres` WRITE;
INSERT INTO `movie_genres` VALUES (1,1), (1,2);
UNLOCK TABLES;