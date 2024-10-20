<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files\header.css">
    <link rel="stylesheet" href="css_files\homepage.css">
    <link rel="stylesheet" href="css_files\base.css">
    <link rel="stylesheet" href="css_files\cards.css">
    <link rel="stylesheet" href="css_files\plans.css">
    <link rel="stylesheet" href="css_files\footer.css">
    <script src="js_Files/pReg.js"></script>
    <title>JC's Fitness gym</title>
</head>

<!-- base.css yung mga base design like colors or mga universal design -->
<!-- sa colors naman may variables na pwede gamitin, nasa base.css din yan. 
    pag gagamit kayo colors gumamit kayo nun para kung may changes na pagawin si 
    sir tulad sakin noon, madali nyo nagawa -->
<!-- naka body = 0 margin nayan -->

<body>
    <?php
        include("html_Files\\header.html");
        include("html_Files\\homepage.html");
        include("html_Files\\programs.html");
        include("html_Files\\plans.html");
        include("html_Files\\footer.html");


        include("database.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['fName'], $_POST['lName'], $_POST['number']
                    , $_POST['email'] , $_POST['inquiry'], $_POST['sched'])){
    
                $fName = htmlspecialchars($_POST['fName']);
                $lName = htmlspecialchars($_POST['lName']);
                $number = htmlspecialchars($_POST['number']);
                $email = htmlspecialchars(string: $_POST['email']);
                $inquiry = htmlspecialchars($_POST['inquiry']);
                $sched = htmlspecialchars($_POST['sched']);
        
                /*// DEBUG
                echo "Input 1: $fName<br/>";
                echo "Input 2: $lName<br/>";
                echo "Input 3: $number<br/>";
                echo "Input 1: $email<br/>";
                echo "Input 2: $inquiry<br/>";
                echo "Input 3: $sched<br/>"; */
                
                
              /*   echo "data is has been read";  */
    
                $query = "insert into pre_register(fName,lName,number,email,inquiry,sched)
                                        values ('$fName','$lName','$number','$email','$inquiry','$sched')";
                try {
                    mysqli_query($conn,$query);
                    echo
                    "<script>
                    dataAdd();
                    </script>";
                } catch (mysqli_sql_exception) {
                    echo
                    "<script>
                    dataNotAdd();
                    </script>";                
                };
                                        
            } else {
                echo
                "<script>
                dataNotComp();
                </script>";                
            };
        };

    ?>


</body>
</html>