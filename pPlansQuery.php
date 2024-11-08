<?php
    include("database.php");
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $membership = '';
        $payment = '';
        $userId = $_SESSION['userId'];
        echo $userId;

        // Check if membership is set and assign it
        if (isset($_POST['membership'])) {
            $membership = $_POST['membership'];
        }

        // Check if payment is set and assign it
        if (isset($_POST['payment'])) {
            $payment = $_POST['payment'];
        }

        // Prepare and execute the SQL insert statement with SQL injection protection
        $stmt = $conn->prepare("INSERT INTO plans (membership, payment,userId) VALUES (?, ?, ?)");
        
        // Bind parameters to prevent SQL injection
        $stmt->bind_param("ssi", $membership, $payment, $userId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        
        // Close the statement
        $stmt->close();       
        header("Location: profile.php");
        exit(); // Stop script execution after redirect 
    }
?>