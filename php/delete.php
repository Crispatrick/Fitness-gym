<?php
    include("../database.php");

    // Get the ID from the query string
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt1 = $conn->prepare("DELETE FROM plans WHERE userId = ?");
        $stmt1->bind_param("i", $id);
        $stmt1->execute();
        $stmt1->close();

        // Now delete the row from `reg_form`
        $stmt2 = $conn->prepare("DELETE FROM reg_form WHERE id = ?");
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $stmt2->close();

        // Prepare and execute delete statement
/*         $stmt = $conn->prepare("DELETE FROM reg_form WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
 */
        // Close connections
        /* $stmt1->close();
        $stmt2->close(); */
    }

    // Redirect back to edit page after deletion
    header("Location: ../adminDashboard.php");
    exit;
?>