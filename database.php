<?php
include_once('db.php');
// Create connection
$con= new mysqli($localhost, $dbusername, $dbpass);
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($con->query($sql) === TRUE) {
// echo "Database created successfully";
} else {
echo "Error creating database: " . $con->error;
}

$con = mysqli_connect("$localhost","$dbusername","$dbpass","$dbname");

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `results` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` text,
    `number` text,
    `unit` text,
    `date` text,
    `result` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
    `total` text,
    PRIMARY KEY (`id`)
  ) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";
if ($con->query($sql) === TRUE) {
// echo "Table users created successfully";
} else {
echo "Error creating table: " . $con->error;
}
$con->close();
?>
