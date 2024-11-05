<?php
    // Start the session
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
        // If the user is logged in, redirect to profile.php
        header("Location: profile.php");
        exit(); // Stop script execution after redirect
    } else {
        // If the user is not logged in, redirect to pReg.php
        header("Location: pReg.php");
        exit(); // Stop script execution after redirect
    }
?>