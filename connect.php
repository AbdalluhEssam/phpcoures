<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your code here

// Close connection


?>