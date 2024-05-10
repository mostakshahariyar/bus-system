<?php
require_once ('connect.php');

if (isset($_GET['email']) && isset($_GET['a_email'])) {
    // Sanitize the input
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $a_email = mysqli_real_escape_string($con, $_GET['a_email']);

    // Prepare the DELETE statement
    $query = "DELETE FROM users WHERE user_email = ?";
    $stmt = mysqli_prepare($con, $query);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo '<script>
                alert("Delete successful");
                window.location.href = "/Bus-Management-system-main/customerfmain.php?email=' . $email . '";
              </script>';
    } else {
        echo '<script>
                alert("Failed to delete");
                window.location.href = "/Bus-Management-system-main/customerfmain.php?email=' . $email . '";
              </script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>