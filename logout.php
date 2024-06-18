<!-- logout.php -->

<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to login page in the api folder
header("Location: api/login.php");
exit();
?>
