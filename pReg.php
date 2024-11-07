<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files\base.css">
    <link rel="stylesheet" href="css_files\pReg.css">
    <link rel="stylesheet" href="css_files\header.css">
    <link rel="stylesheet" href="css_files\footer.css">

    <title>Document</title>
</head>
<body>
    <div class="header_navbar">
        <img src="images\Header\logo.png" class="header_logo">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="./#programs">PROGRAMS</a></li>
            <li><a href="profile.php">PROFILE</a></li>
            <li><a href="pReg.php" class="header_button">INQUIRE</a></li>
            
        </ul>
    </div>

    <?php
        include("html_Files\\preReg.html");
        include("html_Files\\footer.html");
    ?>
</body>
</html>