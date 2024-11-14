<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_Files/products.css">
    <!-- <link rel="stylesheet" href="css/Index.css"> -->
    <link rel="stylesheet" href="../css_Files/footer.css">
    <link rel="stylesheet" href="../css_Files/header.css">
    <title>Document</title>
</head>
<body>
    <div class="header_navbar">
        <a href="index.php"><img src="..\images\Header\logo.png" class="header_logo"></a>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php#programs">PROGRAMS</a></li>
            <li><a href="auth.php">PROFILE</a></li>
            
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

        <li><a href="<?php echo $link; ?>" class="header_button"><?php echo $text; ?></a></li>
        
    </ul>
</div>
    <?php
/*         include("../html_Files/header.html"); */
        include("../database.php");
        // Prepare the SQL statement
        $sql = "SELECT id, fname, lname,bdate,gender,address, emailAdd,contact,height,weight,age FROM reg_form   ORDER BY id DESC";
        $stmt = $conn->prepare($sql);

        // Execute the statement
        $stmt->execute();

        // Bind result variables
        $stmt->bind_result($id, $fname, $lname,$bdate,$gender,$address, $emailAdd,$contact,$height,$weight,$age);
        ?>

        <div id="parentProduct">
            <!-- <h1>ADD NEW PRODUCT</h1> -->


            
<!--             <form action="add.php" method="POST">
                <table id="products">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='productData'><input type="text" name="name" required /></td>
                            <td class='productData'><input type="number" name="price" step="0.01" required /></td>
                            <td class='productData'><input type="number" name="stock" required /></td>
                        </tr>
                    </tbody>
                </table>
                <div style="text-align: right; margin-top: 20px;">
                    <input type="submit" value="Add Product" id="save"/>
                </div>
            </form> -->

<!-- 
            <form action="addSoloTest.php" method="POST" enctype="multipart/form-data">
                <div style="text-align: right; margin-top: 20px;">
                    <input type="submit" value="Add Product" id="save"/>
                </div>
                <table id="products">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='productData'><input type="file" name="fileToUpload" id="fileToUpload" required/></td>
                            <td class='productData'><input type="text" name="name" required /></td>
                            <td class='productData'><input type="number" name="price" step="0.01" required /></td>
                            <td class='productData'><input type="number" name="stock" required /></td>
                            <td class='productData'><input type="text" name="desc" required /></td>
                        </tr>
                    </tbody>
                </table>

            </form> -->
        </div>


        <!-- <hr> --> <!-- Horizontal rule for separation -->

        <div id="parentProduct">
            <h1>EDIT Membership</h1>            
            <form action="update.php" method="POST">
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
                                <th>Deletion</th> <!-- New Delete column -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetch values and output data for each row with input fields
                            while ($stmt->fetch()) {
                                echo "<tr>";
                                echo "<td class='productData'>" . htmlspecialchars($id) . "</td>";
                                echo "<td class='productData'><input type='text' name='fname[]' value='" . htmlspecialchars($fname) . "' /></td>";
                                echo "<td class='productData'><input type='text' name='lname[]' value='" . htmlspecialchars($lname) . "' /></td>";
                                echo "<td class='productData'><input type='date' name='bdate[]' value='" . htmlspecialchars($bdate) . "' /></td>";
                                echo "<td class='productData'><input type='text' name='gender[]' value='" . htmlspecialchars($gender) . "' /></td>";
                                echo "<td class='productData'><input type='text' name='address[]' value='" . htmlspecialchars($address) . "' /></td>";
                                echo "<td class='productData'><input type='text' name='emailAdd[]' value='" . htmlspecialchars($emailAdd) . "' /></td>";
                                echo "<td class='productData'><input type='text' name='contact[]' value='" . htmlspecialchars($contact) . "' /></td>";
                                echo "<td class='productData'><input type='number' name='height[]' value='" . htmlspecialchars($height) . "' step='0.01' /></td>";
                                echo "<td class='productData'><input type='number' name='weight[]' value='" . htmlspecialchars($weight) . "' step='0.01' /></td>";
                                echo "<td class='productData'><input type='number' name='age[]' value='" . htmlspecialchars($age) . "' /></td>";

/* 
                                echo "<td class='productData'><input type='text' name='fname[]' value='" . htmlspecialchars($name) . "' /></td>";

                                echo "<td class='productData'><input type='number' name='price[]' value='" . htmlspecialchars($price) . "' step='0.01' /></td>";
                                echo "<td class='productData'><input type='number' name='stock[]' value='" . htmlspecialchars($stock) . "' /></td>";
                                echo "<td class='productData'><input type='text' name='description[]' value='" . htmlspecialchars($desc) . "' /></td>";
                                 */
                                
                                
                                
                                echo "<input type='hidden' name='id[]' value='" . htmlspecialchars($id) . "' />";
                                                // Add a delete link in the new column
                                echo "<td class='productData'><a href='delete.php?id=" . htmlspecialchars($id) . "' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>

                </table>
                <div style="text-align: right; margin-top: 20px;">
                    <input type="submit" value="SAVE" id="save"/>
                </div>
            </form>
        </div>



        

        <!-- Form to add a new product -->





        <?php
        include("../html_Files/footer.html");
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    ?>
<!-- 
<footer>
        <div class="footer_row">
            <div>
                <a href="#"><img src="../images/logo.png" class="footer_logo"></a>
            </div>

            <div class="footer_info">
                <ul>
                    <li><a href="#">about us</a></li>
                    <br><br>
                    <li><a href="#">FAQS</a></li>
                </ul>
            </div>

            <div class="footer_info">
                <ul>
                    <li><a href="#">store locator</a></li>
                    <br><br>
                    <li><a href="#">shipping and returns</a></li>
                </ul>
            </div>

            <div class="footer_info">
                <ul>
                    <li><a href="#">privacy and policy</a></li>
                    <br><br>
                    <li><a href="#">terms and conditions</a></li>
                </ul>
            </div>

    
            <div class="footer_info">
                        <img src="../images/facebook.png" class="footer_facebook">
                        <img src="../images/instagram.png" class="footer_instagram">
                        <img src="../images/twitter.png" class="footer_twitter">  
            </div>
        </div> 
    </footer> -->
</body>
</html>

