<?php
require_once('config/connect.php');

// Check if id, date, and name parameters are set in the URL
if(isset($_GET['id']) && isset($_GET['date']) && isset($_GET['name'])) {
    // Sanitize the input
    $id = mysqli_real_escape_string($con, $_GET['id']);
    $date = mysqli_real_escape_string($con, $_GET['date']);
    $name = mysqli_real_escape_string($con, $_GET['name']);

    // Check if the user is logged in
    $query = "SELECT * FROM activity WHERE status = 'YES'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row["email"];

        // Prepare the insert statement
        $stmt = mysqli_prepare($con, "INSERT INTO sellticket (busid, busname, cus_email, journey_date, seat) VALUES (?, ?, ?, ?, ?)");

        // Get distinct seat values
        $query = "SELECT DISTINCT seat FROM selected";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $seat = $row['seat'];
            // Bind parameters and execute statement
            mysqli_stmt_bind_param($stmt, "sssss", $id, $name, $email, $date, $seat);
            mysqli_stmt_execute($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Redirect or show success message
        // Redirect to a success page or show success message
        echo '<script>
                window.location.href = "/Bus-Management-system-main/end.php";
              </script>';
        exit();
    } else {
        // User is not logged in
        echo '<script>
                alert("Please log in first");
                window.location.href = "/Bus-Management-system-main/loginticket.php";
              </script>';
    }
} else {
    // Missing parameters
    echo "Error: Missing parameters";
}
?>
