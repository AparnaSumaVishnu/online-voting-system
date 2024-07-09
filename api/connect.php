<?php
$host = "localhost"; // MySQL host (usually 'localhost')
$username = "root"; // MySQL username
$password = ""; // MySQL password (leave empty if none)
$database = "voting"; // MySQL database name

// Create connection
$connect = new mysqli($host, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
