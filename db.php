<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lourdebella";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
} 
?>
