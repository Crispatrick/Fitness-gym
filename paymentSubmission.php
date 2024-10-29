<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css_Files/payment.css">
</head>
<body>

<?php
    include("database.php");
    include("pMethod.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        /* $conn = mysqli_connect('localhost', 'root', '', 'gym') or die("Connection Failed: " . mysqli_connect_error()); */

        // Check if all required fields are set
        if (isset($_POST['membershipType']) && isset($_POST['startDate']) && isset($_POST['endDate'])
            && isset($_POST['paymentMethod'])) {

            $membershipType = $_POST['membershipType'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $paymentMethod = $_POST['paymentMethod'];


            // Correct the SQL query syntax
            $sql = "INSERT INTO reg_form (membershipType, startDate, endDate, paymentMethod) 
                    
            VALUES ('$membershipType', '$startDate', '$endDate', '$paymentMethod')";

            // Execute the query
            $query = mysqli_query($conn, $sql);

            // Check if the query was successful
            if ($query) {
                echo "Entry Successful";
            } else {
                echo "Error Occurred: " . mysqli_error($conn);
            }
        } else {
            echo "All fields are required!";
        }
    }
?>
    
</body>
</html>
