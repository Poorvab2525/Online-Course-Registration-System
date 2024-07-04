<?php
$servername = "localhost";
$username = "root";
$password = "Myrootpass123@";
$database = "lab_prj";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

