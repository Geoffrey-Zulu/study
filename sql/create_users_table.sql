-- create_users_table.sql

-- Use the "study" database
USE study;

-- Create a "users" table
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
