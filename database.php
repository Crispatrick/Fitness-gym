<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "gym";
    $conn =  "";
    try {
        $conn = mysqli_connect($dbServer, $dbUser,$dbPass,$dbName);
        echo"Connected na par sa database"; 
    } catch (mysqli_sql_exception) {
        echo"may problema par sa database";
    };
?>  