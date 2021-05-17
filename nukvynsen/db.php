<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
//$dbname="dbbi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// $sql = "CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(50) NOT NULL
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table users created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }


$sql = "CREATE TABLE products (
id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
filename VARCHAR(255) NOT NULL,
name VARCHAR(255) NOT NULL,
description VARCHAR(255) NOT NULL,
price DECIMAL(5,2) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
        echo "Table users created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
?>