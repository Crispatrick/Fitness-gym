<!-- <!DOCTYPE HTML>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="header.css">
</head>
<body> -->
<section>
    <div class="header_navbar">
    <img src="images\Header\logo.png" class="header_logo">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#programs">PROGRAMS</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="pReg.php" class="header_button">
            <?php echo isset($_SESSION['email']) ? 'SUBSCRIBE' : 'INQUIRE'; ?>
        </a></li>
        
    </ul>
</div>
</section>
<!-- </body>
</html> -->