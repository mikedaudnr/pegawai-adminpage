<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root'; // replace with your actual username
$db_password = ''; // replace with your actual password
$db_name = 'penilaian_september_seruput';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to close connection
function close_connection() {
    $conn->close();
}

?>