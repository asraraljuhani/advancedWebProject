<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Freelance_Project";

// Create connection
global $conn;
$conn =  new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>