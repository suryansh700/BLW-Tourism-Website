-- Create Database
CREATE DATABASE IF NOT EXISTS tourism;
USE tourism;

-- Create Table
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    destination VARCHAR(50) NOT NULL,
    persons INT NOT NULL,
    travel_date DATE NOT NULL,
    booked_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
