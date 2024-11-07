<?php include ("database.php");?>

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
    <div class="header_navbar">
        <img src="images\Header\logo.png" class="header_logo">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="./#programs">PROGRAMS</a></li>
            <li><a href="profile.php">PROFILE</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
            <li><a href="pReg.php" class="header_button">
                    <?php echo isset($_SESSION['email']) ? 'SUBSCRIBE' : 'INQUIRE'; ?>
                </a></li>
        </ul>
    </div>
    <!-- end header -->
    
<div class="body">
    <div class="container">
        <img src="images/Profile/profilePic.jpg" alt="">
        <div class="child">
        <h2><?php
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
            
            <!-- the height data are being callout -->
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

            <!-- the weight data are being callout -->
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

            <!-- the birthdate data are being callout -->
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

        <!-- the address data are being callout -->
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
            
            <!-- the emailaddress data are being callout -->
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

        <!-- the address data are being callout -->
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
            
        </div>
        
    </div>

        <!-- subcriptions area -->
    
        <!-- the membershipType data are being callout -->
    <div class="subcriptions">
        <div class="subcrip">
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["membershipType"] . "<h1>";
                
            }
        ?>
        </div>

        
        <div class="website">
            <img src="images/Profile/facebook.png" alt="" class="site">
            <img src="images/Profile/twitter.png" alt="" class="site">
            <img src="images/Profile/instagram.png" alt="" class="site">
            <img src="images/Profile/whatsapp1.png" alt="" class="site">
        </div>

        <!-- emergency -->
        <div class="emergency">
            <div class="case">
            <p>IN CASE OF EMERGENCY, PLEASE CONTACT</p>
            </div>

            <div class="info">
                <p class="infoSec">NAME</p>
                
                <!-- the emergency_name data are being callout -->
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
                
            <!-- the relationship data are being callout -->
                <P class="infoSec">RELATIONSHIP</P>
            <div class="name">
        <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM reg_form WHERE emailAdd = '$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $rows = mysqli_fetch_assoc($result);
                echo "<h1>" . $rows["relationship"] . "<h1>";
            }
        ?>
            </div>
                
            <!-- the phone number data are being callout -->
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

</body>
</html>