
<?php
/*     session_start(); // Start the session */
    include("database.php");
    $subscribe = false;
    $email = $_SESSION['email'];
    $stmt = mysqli_prepare($conn, " SELECT plans.membership
                                    FROM plans INNER JOIN reg_form 
                                    ON plans.userId = reg_form.id
                                    WHERE reg_form.emailAdd = ?");

    // Execute the statement
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    // Store result
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $subscription);
    mysqli_stmt_fetch($stmt);
    /*       echo "<p> Valid From {$start} to {$end}</p>" . $subscription . $start; */

    if (!empty($subscription)) {
        echo "<script> alert('You are already subscribed!');window.location.href = 'profile.php'; </script>";
        $subscribe = true; 
    }

    /*                     if (mysqli_stmt_num_rows($stmt) > 0) {
        // User exists, now fetch the password
        mysqli_stmt_bind_result($stmt, $subscription);
        mysqli_stmt_fetch($stmt);
        echo$subscription;
    }; */
?>
