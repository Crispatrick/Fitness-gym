<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="css_Files/payment.css">
</head>
<body>

<?php
    include("database.php");
    include("pMethod.php");

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

        // Check if all required fields are set
        if (isset($_POST['membershipType']) && isset($_POST['startDate']) && isset($_POST['endDate'])
            && isset($_POST['paymentMethod']) && isset($_POST['gcashNumber']) && isset($_POST['paymayaNumber']) && isset($_POST['creditCardNumber'])) {

            $membershipType = $_POST['membershipType'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $paymentMethod = $_POST['paymentMethod'];
            $gcashNumber = $_POST['gcashNumber'];
            $paymayaNumber = $_POST['paymayaNumber'];
            $creditCardNumber = $_POST['creditCardNumber'];

            // Assign price based on membership type
            switch ($membershipType) {
                case 'BRONZE':
                    $price = 1499;
                    break;
                case 'SILVER':
                    $price = 3999;
                    break;
                case 'GOLD':
                    $price = 4999;
                    break;
                default:
                    $price = 0; 
                    break;
            }

            // Correct the SQL query to include price
            $sql = "INSERT INTO payment_form (membershipType, startDate, endDate, paymentMethod, gcashNumber, paymayaNumber, creditCardNumber, price) 
                    VALUES ('$membershipType', '$startDate', '$endDate', '$paymentMethod', '$gcashNumber', '$paymayaNumber', '$creditCardNumber', '$price')";

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
