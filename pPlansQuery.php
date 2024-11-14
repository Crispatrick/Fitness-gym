<?php
    include("database.php");
    session_start();





    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $membership = '';
        $payment = '';
        $userId = $_SESSION['userId'];
        $annualMembership = "Not Availed";
        $unlimitedSession = "Not Availed";
        $trainerPrograms = "Not Availed";
/*         echo $userId; */

        // Check if membership is set and assign it
        if (isset($_POST['membership'])) {
            $membership = $_POST['membership'];
        }
        

/*         // Check if payment is set and assign it
        if (isset($_POST['payment'])) {
            $payment = $_POST['payment'];
        } */

        if (isset($_POST['annual_membership'])) {
            $annualMembership = $_POST['annual_membership']; // Will be "Availed"
        }
    
        if (isset($_POST['unlimited_session'])) {
            $unlimitedSession = $_POST['unlimited_session']; // Will be "Availed"
        }
    
        if (isset($_POST['trainer_programs'])) {
            $trainerPrograms = $_POST['trainer_programs']; // Will be "Availed"
        }

        // Prepare and execute the SQL insert statement with SQL injection protection
        $stmt = $conn->prepare("INSERT INTO plans (membership,annualMem,UnliSession,trainAndProg,userId) VALUES (?,?,?,?, ?)");
        
        // Bind parameters to prevent SQL inject ion
        $stmt->bind_param("ssssi", $membership, $annualMembership,$unlimitedSession,$trainerPrograms, $userId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        
        // Close the statement
        $stmt->close();       
        header("Location: pMethod.php");
        exit(); // Stop script execution after redirect 
    }
?>