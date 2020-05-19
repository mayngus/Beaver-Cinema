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

--example insert for Customer
INSERT INTO Customer (cust_first_name, cust_last_name, cust_street, cust_city, cust_state, cust_zip, cust_phone, cust_email) VALUES ('Jimmy', 'John', '4134 Monroe Ave', 'Corvallis', 'OR', 97330, 5034150290, 'jjohn@gmail.com');

CREATE TABLE Orders(

 orderID int AUTO_INCREMENT UNIQUE PRIMARY KEY,
 customerID int AUTO_INCREMENT,
 credit_number int NOT NULL,
 credit_exp int NOT NULL,
 order_date DATE NOT NULL,
 delivery varchar(255) NOT NULL,
 FOREIGN KEY (customerID) REFERENCES Customer (customerID)

);

--example insert for Orders
INSERT INTO Orders (customerID, credit_number, credit_exp, order_date, delivery) VALUES (
    (SELECT customerID FROM Customer WHERE cust_first_name='Jimmy' AND cust_last_name='John'),
    1234567812345678,
    0824,
    '2020-01-02',
    'Delivery'
);


CREATE TABLE Movies(

 movieID int AUTO_INCREMENT UNIQUE PRIMARY KEY,
 orderID int DEFAULT NULL,
 actorID int DEFAULT NULL,
 genreID int DEFAULT NULL,
 price varchar(255) NOT NULL,
 num_in_stock int DEFAULT NULL,
 movie_rating int DEFAULT NULL,
 FOREIGN KEY (orderID) REFERENCES Orders (orderID),
 FOREIGN KEY (actorID) REFERENCES Actors (actorID),
 FOREIGN KEY (genreID) REFERENCES Genres (movieID)

);

--example insert into Movies
INSERT INTO Movies (price, num_in_stock, movie_rating) VALUES (4.95, 23, 4.8); 

CREATE TABLE Actors(

 actorID int AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
 actor_name varchar(255) NOT NULL


);

--example insert into Actors
INSERT INTO Actors (actor_name) VALUES ('Evelyn Hancock');

CREATE TABLE Genres(

 movieID int AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
 genre_type varchar(255) NOT NULL

);

--example insert into Genres
INSERT INTO Actors (genre_type) VALUES ('Comedy');


