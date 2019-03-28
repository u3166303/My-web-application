

CREATE DATABASE yikai_a;

use yikai_a;

CREATE TABLE works (
	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	make VARCHAR(30) NOT NULL,
	model VARCHAR(50) NOT NULL,
	color VARCHAR(30),
    location VARCHAR(30),
	date TIMESTAMP
);

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);




