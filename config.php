<?php
// Database configuration
$servername = "localhost";
$username = "your_db_username";  // Replace with your database username
$password = "your_db_password";  // Replace with your database password
$dbname = "art_gallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
