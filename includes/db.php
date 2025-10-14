<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';  // Your database username
$db_pass = 'root';      // Your database password
$db_name = 'gce_prep';  // Your database name

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4");
