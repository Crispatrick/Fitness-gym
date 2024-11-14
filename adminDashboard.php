<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_Files/products.css">
    <link rel="stylesheet" href="css_Files/footer.css">
    <link rel="stylesheet" href="css_Files/header.css">
    <title>Document</title>
</head>
<body>
<?php
        include("database.php");
        include("html_Files/header.html");
?>


<?php

        // Prepare the SQL statement
        $sql = "SELECT id, method, details,price FROM logs   ORDER BY id DESC";
        $stmt = $conn->prepare($sql);

        // Execute the statement
        $stmt->execute();

        // Bind result variables
        $stmt->bind_result($id, $method, $details,$price);
?>
<div id="parentProduct">
        <h1>LOGS</h1>
        <table id="products">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Payment Method</th>
                    <th>Payment Details</th>
                    <th>Price</th>      
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch values and output data for each row
                    while ($stmt->fetch()) {
                        echo "<tr>";
                            echo "<td class='productData'>" . htmlspecialchars($id) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($method) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($details) . "</td>";
                            echo "<td class='productData'>" . number_format($price, 2) . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <div style="text-align: right; margin-top: 20px;">
            <a href="php/edit.php" id="edit">EDIT</a>
        </div>
    </div>

<hr>


<?php

        // Prepare the SQL statement
        $sql = "SELECT id, fname, lname,bdate,gender,address, emailAdd,contact,height,weight,age FROM reg_form   ORDER BY id DESC";
        $stmt = $conn->prepare($sql);

        // Execute the statement
        $stmt->execute();

        // Bind result variables
        $stmt->bind_result($id, $fname, $lname,$bdate,$gender,$address, $emailAdd,$contact,$height,$weight,$age);
?>
    <div id="parentProduct">
        <h1>MEMBERS</h1>
        <table id="products">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Tel No.</th>
                    <th>height</th>
                    <th>weight</th>
                    <th>age</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch values and output data for each row
                    while ($stmt->fetch()) {
                        echo "<tr>";
                            echo "<td class='productData'>" . htmlspecialchars($id) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($fname) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($lname) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($bdate) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($gender) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($address) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($emailAdd) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($contact) . "</td>";
                            echo "<td class='productData'>" . number_format($height, 2) . "</td>";
                            echo "<td class='productData'>" . number_format($weight, 2) . "</td>";
                            echo "<td class='productData'>" . htmlspecialchars($age) . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <div style="text-align: right; margin-top: 20px;">
            <a href="php/edit.php" id="edit">EDIT</a>
        </div>
    </div>



    <?php
        // Close the statement and connection
        include("html_Files/footer.html");
        $stmt->close();
        $conn->close();
    ?>
</body>
</html>


