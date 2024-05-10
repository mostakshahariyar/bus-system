<?php
require_once('connect.php');

if (isset($_GET['id'])) {
    // Sanitize the input
    $id = mysqli_real_escape_string($con, $_GET['id']);

    // Prepare the DELETE statement
    $query = "DELETE FROM buslist WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $id);

    // Execute the statement
    mysqli_stmt_execute($stmt);
    echo 'ami';

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo ' lol';
        echo '<script>
                alert("Delete successful");
                window.location.href = "/Bus-Management-system-main/addbus.php";
              </script>';
    } else {
        echo ' na';
        echo '<script>
                alert("Failed to delete");
                window.location.href = "/Bus-Management-system-main/addbus.php";
              </script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
