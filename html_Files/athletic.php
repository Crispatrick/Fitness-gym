<!DOCTYPE HTML>
<html>
<head>
    <title>Solo Page</title>
    <link rel="stylesheet" href="../css_Files/atlethic.css">
    <link rel="stylesheet" href="../css_Files/footer.css">
    <link rel="stylesheet" href="../css_Files/header.css">
</head>
<body>
    <!-- header section -->
    <div class="header_navbar">
        <img src="../images\Header\logo.png" class="header_logo">
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="../#programs">PROGRAMS</a></li>
            <li><a href="../pReg.php" class="header_button">INQUIRE</a></li>
        </ul>
    </div>

    <div class="athletic_background">
        <div>
        <h1 class="athletic_athletic">ATHLETIC</h1>
        <h2 class="athletic_training">TRAINING</h2>
        <p class="athletic_content">It combine exercises, drills, and sometimes sport-specific techniues to enhance performance, prevent injuries, and aid in recovery. Athletic trainers work closely with athletes to trailor programs that meet their individual needs and goals.</p>
    </div>
    <div>
        <br>
        <br>
        <br>
        <br>
        <?php
            session_start(); // Start the session
            
            // Determine the link and text based on login status
            if (empty($_SESSION['logged'])) {
                $link = 'pReg.php';
                $text = 'INQUIRE';
            } else {
                $link = 'pMethod.php';
                $text = 'SUBSCRIBE';
            }
        ?>
        <a href="../<?php echo $link; ?>" class="athletic_button"><?php echo $text; ?></a>
        <<!-- a class="athletic_button">REGISTER NOW</a>        -->
    </div>
    </div>
    
<footer>
        <div class="footer_row">
            <div>
                <img src="../images/Footer/logo.png" class="footer_logo">
         </div>

<!-- footer area -->
            <div class="footer_info">
                <h1 class="footer_email">OUR PROGRAMS</h1>
                <br>
                <p style="font-size: 15px;">Circuit Training</P>
                <p style="font-size: 15px;">Athletic Training</P>
                <p style="font-size: 15px;">Weight Training</p>
                <p style="font-size: 15px;">Strength and Conditioning</p>
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
                        <img src="../images/Footer/website.jpg" class="footer_site">
                        
                    </div>
                </div>
            <hr style="width: 50%; border: 0; border-bottom: 2px solid #d2f121; margin: 20px auto;">
            <p class="footer_copyright">Copyright 2024.All Right Reserved<br></p>
            
</footer>

</body>
</html>
