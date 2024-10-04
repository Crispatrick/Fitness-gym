<?php
    include("database.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['fName'], $_POST['lName'], $_POST['number']
                , $_POST['email'] , $_POST['inquiry'], $_POST['sched'])){

            $fName = htmlspecialchars($_POST['fName']);
            $lName = htmlspecialchars($_POST['lName']);
            $number = htmlspecialchars($_POST['number']);
            $email = htmlspecialchars($_POST['email']);
            $inquiry = htmlspecialchars($_POST['inquiry']);
            $sched = htmlspecialchars($_POST['sched']);
    
            /*// DEBUG
            echo "Input 1: $fName<br/>";
            echo "Input 2: $lName<br/>";
            echo "Input 3: $number<br/>";
            echo "Input 1: $email<br/>";
            echo "Input 2: $inquiry<br/>";
            echo "Input 3: $sched<br/>"; */
            
            
            echo "data is has been read";

            $query = "insert into pre_register(fName,lName,number,email,inquiry,sched)
                                    values ('$fName','$lName','$number','$email','$inquiry','$sched')";
            try {
                mysqli_query($conn,$query);
                echo"nagalagay na sa database";
            } catch (mysqli_sql_exception) {
                echo"dili man ba magalagay sa database ba";
            };
                                    
        } else {
            echo "One or more inputs are missing.";
        };
    };
?>