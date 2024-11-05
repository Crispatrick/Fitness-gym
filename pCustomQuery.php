<?php
    include("database.php");
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $startDate = '';
        $endDate = '';
        $payment = '';
        $membership = "custom";
        $userId = $_SESSION['userId'];

        // Check if start date is set and assign it
        if (isset($_POST['startDate'])) {
            $startDate = $_POST['startDate'];
        }

        // Check if end date is set and assign it
        if (isset($_POST['endDate'])) {
            $endDate = $_POST['endDate'];
        }

        // Check if payment is set and assign it
        if (isset($_POST['payment'])) {
            $payment = $_POST['payment'];
        }



        // Prepare and execute the SQL insert statement with SQL injection protection
        $stmt = $conn->prepare("INSERT INTO plans (membership, startDate, endDate, payment, userId) VALUES (?, ?, ?, ?, ?)");
        
        // Bind parameters to prevent SQL injection
        $stmt->bind_param("ssssi", $membership, $startDate, $endDate, $payment,$userId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();

    }
?>