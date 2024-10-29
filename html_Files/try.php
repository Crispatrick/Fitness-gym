<?php
    include ("../database.php");
    $sql = "SELECT * FROM reg_form WHERE fname = 'kristian'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_assoc($result);
        echo $rows["fname"];
    }
    mysqli_close($conn);
?>
