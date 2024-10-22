<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css_Files/rForm.css">
</head>
<body>

<?php
    include("database.php");
    include("html_Files/regForm.html");

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        /* $conn = mysqli_connect('localhost', 'root', '', 'gym') or die("Connection Failed: " . mysqli_connect_error()); */

        // Check if all required fields are set
        if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['bdate']) && isset($_POST['gender'])
            && isset($_POST['address']) && isset($_POST['emailAdd']) && isset($_POST['contact']) && isset($_POST['height'])
            && isset($_POST['weight']) && isset($_POST['membershipType']) && isset($_POST['startDate']) && isset($_POST['endDate'])
            && isset($_POST['emergency_name']) && isset($_POST['relationship']) && isset($_POST['Econtact'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $bdate = $_POST['bdate'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $emailAdd = $_POST['emailAdd'];
            $contact = $_POST['contact'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $membershipType = $_POST['membershipType'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $emergency_name = $_POST['emergency_name'];
            $relationship = $_POST['relationship'];
            $Econtact = $_POST['Econtact'];

            // Correct the SQL query syntax
            $sql = "INSERT INTO reg_form (fname, lname, bdate, gender, address, emailAdd, contact, height,
                    weight, membershipType, startDate, endDate, emergency_name, relationship, Econtact) 
                    
            VALUES ('$fname', '$lname', '$bdate', '$gender', '$address', '$emailAdd', '$contact', '$height'
                , '$weight', '$membershipType', '$startDate', '$endDate', '$emergency_name', '$relationship', '$Econtact')";

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
