<?php
require_once('connect.php');

if (isset($_GET['id'])) {
    // Assuming 'serial' is an integer, so we use intval() to sanitize the input
    $id = intval($_GET['id']);

    // Prepare the DELETE statement
    $query = "DELETE FROM contractus WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo '<script>
                alert("Delete successful");
                window.location.href = "/Bus-Management-system-main/customertext.php";
              </script>';
    } else {
        echo '<script>
                alert("Failed to delete");
                window.location.href = "/Bus-Management-system-main/customertext.php";
              </script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
