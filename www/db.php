<?php
// Database credentials
$servername = "localhost";
$username = "Akaash";
$password = "MyPassword";
$database = "php_demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
