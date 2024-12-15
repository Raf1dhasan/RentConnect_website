<?php
$servername = "localhost";
$username = "f41rhasan";  // Your MySQL username
$password = "f41rhasan136";  // Your MySQL password
$dbname = "C354_f41rhasan";  // Use the existing database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
