<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_Files/profile1.css">
    <link rel="stylesheet" href="css_Files/header.css">
    <link rel="stylesheet" href="css_Files/footer.css">
    <title>Document</title>
</head>
<body>
        <!-- to logout -->
         <a href="logout.php">logout</a>
        
    <?php
            /* This is for login */
            session_start(); 
            include("database.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['emailLogin'], $_POST['pass'])){
        
                    $email = htmlspecialchars($_POST['emailLogin']);
                    $entered_password = htmlspecialchars($_POST['pass']);

/*                 echo$email;
                    echo$entered_password; */

            
                    /*// DEBUG
                    echo "Input 1: $fName<br/>";
                    echo "Input 2: $lName<br/>";
                    echo "Input 3: $number<br/>";
                    echo "Input 1: $email<br/>";
                    echo "Input 2: $inquiry<br/>";
                    echo "Input 3: $sched<br/>"; */
                    
                    
                /*   echo "data is has been read";  */




                    // Prepare SQL statement to prevent SQL injection
                    $stmt = mysqli_prepare($conn, "SELECT fname FROM reg_form WHERE emailAdd = ?");
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    
                    // Execute the statement
                    mysqli_stmt_execute($stmt);
                    
                    // Store result
                    mysqli_stmt_store_result($stmt);

                    if (mysqli_stmt_num_rows($stmt) > 0) {
                        // User exists, now fetch the password
                        mysqli_stmt_bind_result($stmt, $stored_password);
                        mysqli_stmt_fetch($stmt);
                        
                        /* echo"Debug <br>" .$stored_password. " <br>"; */

                        // Check if the entered password matches the stored plain text password
                        if ($entered_password === $stored_password) {
                            // Password is correct
                            $_SESSION['email'] = $email; // Store email in session
                            echo "Login successful!";
                            /* header('Location: index.php'); */
                        } else {
                            echo "Invalid password.";
                        }
                    } else {
                        echo "No user found with that email.";
                    }
            
                    // Close the statement
                    mysqli_stmt_close($stmt);
                } else {
                    echo "Failed to prepare the SQL statement.";
                }
            };
            /* End of login, take session email */





            include('html_Files\\profile1.php');
            include("html_Files\\footer.html");
    ?>

</body>
</html>
