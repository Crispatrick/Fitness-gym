<?php 
include ("database.php");
/* this is decrepit version, profile2.php is updated one */

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css_Files/profile1.css">
    <link rel="stylesheet" href="../css_Files/header.css">
    <link rel="stylesheet" href="../css_Files/footer.css">
</head> -->

<!-- <body> -->
    <!-- header -->
    <!-- <div class="header_navbar">
        <img src="../images\Header\logo.png" class="header_logo">
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="">PROGRAMS</a></li>
            <li><a href="../pReg.php" class="header_button">INQUIRE</a></li>
        </ul>
    </div> -->
    <!-- end header -->
    
<div class="body">
    <div class="container">
        <img src="images/Profile/profilePic.jpg" alt="">
        <div class="child">
        <h2><?php
/*             echo $_SESSION['email'];
            echo $_SESSION['userId']; */
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo $rows["fname"];
            }
        ?></h2>
            <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo $rows["gender"];
            }
        ?>
        <br>
        <br>
        </div>
    
        <div>
            <!-- height and weight section and also the data is in here -->
            <div class="section1"><P>HEIGHT </P>
            <P>WEIGHT</P></div>
            
            <!-- data is in here -->
        <div class="data1">
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1> " . $rows["height"] . "<h1>";
            }
        ?>
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["weight"] . "<h1>";
            }
        ?>
        </div>

            <!-- birthday and address is in here and also the data -->
            <div class="section2"><P>&nbsp;&nbsp;BIRTHDAY </P>
            <P>&nbsp;&nbsp;ADDRESS</P></div>

            <!-- data is in here -->
            <div class="data2">
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["bdate"] . "<h1>";
            }
        ?>
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["address"] . "<h1>";
            }
        ?>
            </div>
            <!-- email and phone number is in here and also the data -->
            <div class="section3"><P>&nbsp;&nbsp;EMAIL </P>
            <P>&nbsp;&nbsp;PHONE NUMBER</P></div>
            
            <!-- the data is in here -->
            <div class="data3">
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["emailAdd"] . "<h1>";
            }
        ?>
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["address"] . "<h1>";
            }
        ?>
            </div>
        <!-- to logout -->
         <div id="logout">
            <a href="logout.php">logout</a>
        </div>
        </div>
        
    </div>
        <!-- subcriptions area -->
    
    <div class="subcriptions">
        <div class="subcrip">
            
                <?php
                    $email = $_SESSION['email'];
                    $stmt = mysqli_prepare($conn, " SELECT plans.membership, plans.startDate, plans.endDate
                                                    FROM plans INNER JOIN reg_form 
                                                    ON plans.userId = reg_form.id
                                                    WHERE reg_form.emailAdd = ?");
                    
                    // Execute the statement
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    mysqli_stmt_bind_result($stmt, $subscription, $start, $end);
                    mysqli_stmt_fetch($stmt);
              /*       echo "<p> Valid From {$start} to {$end}</p>" . $subscription . $start; */

                    if ($subscription == "custom") {
                        echo "<h1 style='text-transform: uppercase;'>" . $subscription . "</h1>";
                        echo "<p id='valid'> Valid From {$start} to {$end}</p>";

                    } else {
                        echo "<h1 style='text-transform: uppercase;'>" . $subscription . "</h1>";
                    }
                    

/*                     if (mysqli_stmt_num_rows($stmt) > 0) {
                        // User exists, now fetch the password
                        mysqli_stmt_bind_result($stmt, $subscription);
                        mysqli_stmt_fetch($stmt);
                        echo$subscription;
                    }; */
                ?>
           
            <!-- <p>NO SUBCRIPTIONS</p> -->
        </div>
<!--         <div class="website">
            <img src="images/Profile/facebook.png" alt="" class="site">
            <img src="images/Profile/twitter.png" alt="" class="site">
            <img src="images/Profile/instagram.jpg" alt="" class="site">
            <img src="images/Profile/whatsapp.png" alt="" class="site">
        </div> -->

        <!-- emergency -->
        <div class="emergency">
            <div class="case">
            <p>IN CASE OF EMERGENCY, PLEASE CONTACT</p>
            </div>

            <div class="info">
                <p class="infoSec">NAME</p>
            <div class="name">
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["emergency_name"] . "<h1>";
            }
        ?>
            </div>
                
                <P class="infoSec">RELATIONSHIP</P>
            <div class="name">
        <?php
           
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["relationship"] . "<h1>";
            }
        ?>
            </div>
                
                <P class="infoSec">PHONE NUMBER</P>
                <div class="name">
            <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["Econtact"] . "<h1>";
            }
        ?>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- footer -->
<!-- <footer>
    <div class="footer_row">
        <div>
            <img src="../images\Footer\logo.png" class="footer_logo">
     </div>

        <div class="footer_info">
            <h1 class="footer_email">OUR PROGRAMS</h1>
            <br>
            <ul>
                <li><a href="../html_Files/circuit.html">Circuit Training</a></li>
                <br><br>
                <li><a href="../html_Files/athletic.html">Atheletic </a></li>
                <br><br>
                <li><a href="../html_Files/weights.html">Weights </a></li>
                <br><br>
                <li><a href="../html_Files/strength.html">Strenght </a></li>
            </ul>
        </div>

        <div class="footer_info">
            <h1 class="footer_email">ADDRESS</h1>
            <br>
            <p style="font-size: 15px;">123, sample, Testing Street,</P>
            <p style="font-size: 15px;">Manila, Philippines</P>
            <p style="font-size: 15px;" class="footer_email">EMAIL</p>
            <p style="font-size: 15px;"> jcsfitnessclub@gmail.com </p>
            <p style="font-size: 15px;" class="footer_email"> PHONE </p>
            <p style="font-size: 15px;"> 123456789 </p>
        </div>


        <div class="footer_info">
            <h1 class="footer_email">SOCIALS</h1>
            <br>
                    <img src="../images\Footer\website.jpg" class="footer_site">
                    
                </div>
            </div>
        <hr style="width: 50%; border: 0; border-bottom: 2px solid #d2f121; margin: 20px auto;">
        <p class="footer_copyright">Copyright 2024.All Right Reserved<br></p>
        
</footer>
</body>
</html> -->