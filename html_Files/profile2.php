<div class="body">
    <div class="container">
        <img src="images/Profile/profilePic.jpg" alt="">
        <div class="child">
            <h2>
                <?php
                    $email = $_SESSION['email'];
                    $sql = "SELECT reg_form.fname, reg_form.lname, reg_form.gender, reg_form.height, reg_form.weight, 
                                   reg_form.bdate, reg_form.address, reg_form.emailAdd, reg_form.contact, 
                                   reg_form.emergency_name, reg_form.relationship, reg_form.Econtact,
                                   plans.membership, plans.startDate, plans.endDate, plans.id
                            FROM reg_form
                            LEFT JOIN plans ON reg_form.id = plans.userId
                            WHERE reg_form.emailAdd = ?";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if ($row = mysqli_fetch_assoc($result)) {
                        // User information
                        echo $row["fname"] . " " . $row["lname"];
                        
                    }
                ?>
            </h2>
            <?php
                // Output gender
                if ($row) {
                    echo $row["gender"];
                }
            ?>
            <br><br>
        </div>
        
        <div class="section1"><P>HEIGHT </P><P>WEIGHT</P></div>
        <div class="data1">
            <?php
                if ($row) {
                    echo "<h1>" . $row["height"] . "</h1>";
                    echo "<h1>" . $row["weight"] . "</h1>";
                }
            ?>
        </div>
            
        <div class="section2"><P>BIRTHDAY </P><P>ADDRESS</P></div>
        <div class="data2">
            <?php
                if ($row) {
                    echo "<h1>" . $row["bdate"] . "</h1>";
                    echo "<h1>" . $row["address"] . "</h1>";
                }
            ?>
        </div>

        <div class="section3"><P>EMAIL </P><P>PHONE NUMBER</P></div>
        <div class="data3">
            <?php
                if ($row) {
                    echo "<h1>" . $row["emailAdd"] . "</h1>";
                    echo "<h1>" . $row["contact"] . "</h1>"; // Assuming there's a "phone" column in `reg_form`
                }
            ?>
        </div>

        <!-- To logout -->
        <div id="logout">
            <a href="logout.php">logout</a>
        </div>
    </div>

    <!-- Subscription area -->
    <div id="subsEmerg">
        <div class="subcriptions">
            <div class="subcrip">
                <?php
                    // Subscription info
                    if ($row && $row["membership"]) {
                        $membership = $row["membership"];
                        $start = $row["startDate"];
                        $end = $row["endDate"];
                        $memId = $row["id"];

                        $_SESSION['membership'] = $membership;
                        $_SESSION['memId'] = $memId;
        
                        echo "<h1 style='text-transform: uppercase;'>" . $membership . "</h1>";
                        if ($membership == "custom") {
                            echo "<p id='valid'>Valid From {$start} to {$end}</p>";
                        }
                    }else{
                        echo "<h2 style='text-transform: uppercase;'>NO SUBSCRIPTION</h2>"; 
                    }
                ?>
            </div>
        </div>
        <!-- Emergency contact section -->
        <div class="emergency">
            <div class="case">
                <p>IN CASE OF EMERGENCY, PLEASE CONTACT</p>
            </div>
            <div class="info">
                <p class="infoSec">NAME</p>
                <div class="name">
                    <?php
                        if ($row) {
                            echo "<h1>" . $row["emergency_name"] . "</h1>";
                        }
                    ?>
                </div>
                <P class="infoSec">RELATIONSHIP</P>
                <div class="name">
                    <?php
                        if ($row) {
                            echo "<h1>" . $row["relationship"] . "</h1>";
                        }
                    ?>
                </div>
                <P class="infoSec">PHONE NUMBER</P>
                <div class="name">
                    <?php
                        if ($row) {
                            echo "<h1>" . $row["Econtact"] . "</h1>";  // Assuming "Econtact" is the emergency contact phone number
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
