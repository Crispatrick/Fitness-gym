<!DOCTYPE HTML>
<html>
<head>
    <title>Solo Page</title>
    <link rel="stylesheet" href="../css_Files/strength.css">
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

    <div class="strength_background">
        <div>
        <h1 class="strength_athletic">STRENGHT & CONDITIONING</h1>
        <h2 class="strength_training">TRAINING</h2>
        <p class="strength_content">a form of exercise designed to improve overall physical performance by enhancing muscular 
            strength, endurance, and cardiovascular fitness. It combines weightlifting, resistance training, aerobic exercise, 
            and functional movements to develop strength, power, speed, agility, and mobility.</p>
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
        <a href="../<?php echo $link; ?>" class="strength_button"><?php echo $text; ?></a>
<!--         <a class="strength_button" href="/html_Files/regForm.html">REGISTER NOW</a> -->
    </div>
    </div>
<!-- footer section -->
<footer>
    <div class="footer_row">
        <div>
            <img src="../images\Footer\logo.png" class="footer_logo">
     </div>

        <div class="footer_info">
            <h1 class="footer_email">OUR PROGRAMS</h1>
            <br>
            <ul>
                <li><a href="html_Files/circuit.html">Circuit Training</a></li>
                <br><br>
                <li><a href="html_Files/athletic.html">Atheletic </a></li>
                <br><br>
                <li><a href="html_Files/weights.html">Weights </a></li>
                <br><br>
                <li><a href="html_Files/strength.html">Strenght </a></li>
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
</html>