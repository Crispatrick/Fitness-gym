<?php
session_start(); // Start the session

// Unset all session variables
unset($_SESSION['email']); // Remove the specific session variable

// Optionally, destroy the session completely
session_destroy(); // This will remove all session data

// Redirect to login page or home page
header("Location: index.php");
exit; // Exit to ensure no further code is executed
?>