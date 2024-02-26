DROP DATABASE IF EXISTS ClimbingZoneDB;
CREATE DATABASE ClimbingZoneDB;
USE ClimbingZoneDB;

DROP TABLE IF EXISTS User;
CREATE TABLE User
(
    user_id       INTEGER PRIMARY KEY AUTO_INCREMENT,
    username      VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_email    VARCHAR(255) NOT NULL,
    verification_code INTEGER,
    user_token INTEGER,
    user_online INTEGER
);

DROP TABLE IF EXISTS Address;
CREATE TABLE Address
(
    address_id          INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id             INTEGER,
    address_street      VARCHAR(255) NOT NULL,
    address_city        VARCHAR(255) NOT NULL,
    address_postal_code VARCHAR(20)  NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id)
);

DROP TABLE IF EXISTS Product;
CREATE TABLE Product
(
    product_id    INTEGER PRIMARY KEY AUTO_INCREMENT,
    product_name  VARCHAR(255)   NOT NULL,
    product_price DECIMAL(10, 2) NOT NULL,
    product_image VARCHAR(255)   NOT NULL
);
INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`)
VALUES (1, 'Black Rope', 15.00, 'images/rope/black-rope-1.png'),
       (2, 'Blue Rope', 17.00, 'images/rope/blue-rope-1.png'),
       (3, 'Green Rope', 18, 'images/rope/green-rope-1.png'),
       (4, 'Red Rope', 19.99, 'images/rope/red-rope-1.png'),
       (5, 'Mousqueton Bleu', 10.00, 'images/mousqueton/mousqueton-bleu.png'),
       (6, 'Mousqueton Noir', 24.99, 'images/mousqueton/mousqueton-noir.png'),
       (7, 'Lot de 5 Mousquetons Verts', 39.99, 'images/mousqueton/lot-5-mousqueton-verts.png'),
       (8, 'Baudrier Jaune', 44.99, 'images/baudrier/baudrier-jaune.png'),
       (9, 'Baudrier Violet', 44.99, 'images/baudrier/baudrier-violet.png'),
       (10, 'Harnais Intégrale Jaune', 149.99, 'images/baudrier/harnais-integral-jaune.png');

DROP TABLE IF EXISTS Cart;
CREATE TABLE Cart
(
    cart_id       INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id       INTEGER,
    product_id    INTEGER,
    cart_quantity INTEGER NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id),
    FOREIGN KEY (product_id) REFERENCES Product (product_id)
);

DROP TABLE IF EXISTS Command;
CREATE TABLE Command
(
    command_id       INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id          INTEGER,
    product_id       INTEGER,
    command_quantity INTEGER NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id),
    FOREIGN KEY (product_id) REFERENCES Product (product_id)
);

DROP TABLE IF EXISTS Invoices;
CREATE TABLE Invoices
(
    invoice_id           INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id              INTEGER,
    command_id           INTEGER,
    invoice_total_amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id),
    FOREIGN KEY (command_id) REFERENCES Command (command_id)
);

DROP TABLE IF EXISTS Command_product;
CREATE TABLE Command_product
(
    command_id               INTEGER,
    product_id               INTEGER,
    command_product_quantity INTEGER NOT NULL,
    PRIMARY KEY (command_id, product_id),
    FOREIGN KEY (command_id) REFERENCES Command (command_id),
    FOREIGN KEY (product_id) REFERENCES Product (product_id)
);

DROP TABLE IF EXISTS Photo;
CREATE TABLE Photo
(
    photo_id   INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id    INTEGER,
    product_id INTEGER,
    photo_url  VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id),
    FOREIGN KEY (product_id) REFERENCES Product (product_id)
);

DROP TABLE IF EXISTS Rate;
CREATE TABLE Rate
(
    rate_id     INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id     INTEGER,
    product_id  INTEGER,
    rate_rating INTEGER NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id),
    FOREIGN KEY (product_id) REFERENCES Product (product_id)
);

DROP TABLE IF EXISTS Payment;
CREATE TABLE Payment
(
    payment_id     INTEGER PRIMARY KEY AUTO_INCREMENT,
    user_id        INTEGER,
    payment_method VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id)
);

