<?php
    session_start();
    include("database.php");
    $price = 0;

    $membership = $_SESSION['membership'];
    $memId = $_SESSION['memId'];
    $date =  date("Y-m-d");
    $currentDate = $date;
    
/*     echo$currentDate; */

    if ($membership == "Bronze") {
        $price = 1499;
    }elseif ($membership == "Silver") {
        $price = 3999;
    }elseif ($membership == "Gold") {
        $price = 4999;
    }
    else {
        $price = 0;
    }

 /*    echo $membership; */


/*     echo $memId;
    echo $price;
     */


    // Get the selected payment method
    $paymentMethod = $_POST['payment'];
    $details = $_POST['paymentDetails'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO logs (method,details,price, memberId) VALUES (?,?,?,?)");
    $stmt->bind_param("ssii", $paymentMethod,$details, $price, $memId);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Payment method recorded successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();


/* 
    include("database.php");
    $stmt = mysqli_prepare($conn, "SELECT membership FROM plans WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $memId);
    
    // Execute the statement
    mysqli_stmt_execute($stmt);
    
    // Store result
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        // User exists, now fetch the password
        mysqli_stmt_bind_result($stmt, $membership);
        mysqli_stmt_fetch($stmt);


    } */
/*     header("Location: profile.php");
    exit(); // Stop script execution after redirect  */

    header("Location: profile.php");
    exit(); // Stop script execution after redirect     
?>