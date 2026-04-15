<?php
// ====================== DATABASE CONFIGURATION ======================
$host     = 'localhost';
$dbname   = 'mountainview_sda';
$username = 'root';           // Default for XAMPP
$password = '';               // Usually empty on localhost

$conn = new mysqli($host, $username, $password, $dbname);

// Check if connection is successful
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>