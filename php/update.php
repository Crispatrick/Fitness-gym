<?php
    include("../database.php");
    // Check connection


    // Get posted data
    $ids = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bdate = $_POST['bdate'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $emailAdd = $_POST['emailAdd'];
    $contact = $_POST['contact'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    

    // Prepare and execute update statements for each product
    for ($i = 0; $i < count($ids); $i++) {
        $stmt = $conn->prepare("UPDATE reg_form SET fname=?, lname=?,bdate=?,gender=?,address=?, emailAdd=?,contact=?,height=?,weight=?,age=? WHERE id=?");
        $stmt->bind_param("sssssssddii", $fname[$i], $lname[$i], $bdate[$i], $gender[$i],$address[$i], $emailAdd[$i], $contact[$i], $height[$i], $weight[$i], $age[$i], $ids[$i]);
        $stmt->execute();
    }

    // Close connections
    $stmt->close();
    $conn->close();

    // Redirect back to edit page or display a success message
    header("Location: ../adminDashboard.php");
    exit;
?>