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

CREATE TABLE Orders(

 orderID int AUTO_INCREMENT UNIQUE PRIMARY KEY,
 customerID int AUTO_INCREMENT,
 credit_number int NOT NULL,
 credit_exp int NOT NULL,
 order_date DATE NOT NULL,
 delivery varchar(255) NOT NULL,
 FOREIGN KEY (customerID) REFERENCES Customer (customerID)

);

CREATE TABLE Movies(

 movieID int AUTO_INCREMENT UNIQUE PRIMARY KEY,
 orderID int,
 actorID int,
 genreID int,
 price varchar(255) NOT NULL,
 num_in_stock int DEFAULT NULL,
 movie_rating int DEFAULT NULL,
 FOREIGN KEY (orderID) REFERENCES Orders (orderID),
 FOREIGN KEY (actorID) REFERENCES Actors (actorID),
 FOREIGN KEY (genreID) REFERENCES Genres (movieID)

);

CREATE TABLE Actors(

 actorID int AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
 actor_name varchar(255) NOT NULL


);

CREATE TABLE Genres(

 movieID int AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
 genre_type varchar(255) NOT NULL

);