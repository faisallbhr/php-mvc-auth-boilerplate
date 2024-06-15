CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price INT NOT NULL
);

INSERT INTO users (name, email, password)
VALUES ('PHP MVC', 'phpmvc@mail.com', '$2y$12$eLo.1OukyoI6BH/CwDbcWOVJbEqUODgSG3EtCjZgTQ5CiIvTLnXTW'); /* password */
