<?php
// Include the database connection file
require_once ('config/connect.php');

if (isset($_POST['seatArray'])) {
    // Decode the JSON data
    $seats = json_decode($_POST['seatArray']);

    // Check if decoding was successful
    if ($seats !== null) {
        // Prepare the SQL statement
        $sql = "INSERT INTO selected (seat) VALUES (?)";

        // Prepare the statement
        $stmt = mysqli_prepare($con, $sql);

        // Check if the statement was prepared successfully
        if ($stmt) {
            // Bind parameters and execute the statement for each seat
            foreach ($seats as $seat) {
                mysqli_stmt_bind_param($stmt, "s", $seat);
                $result = mysqli_stmt_execute($stmt);

                // Check if the execution was successful
                if ($result) {
                    echo "Seat inserted: $seat <br>";
                } else {
                    echo "Error inserting seat: $seat - " . mysqli_error($conn) . "<br>";
                }
            }
            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    } else {
        echo "Error decoding JSON data";
    }

    // Optionally, you can send a response back to the JavaScript
    // For example, if the operation was successful:
    echo "1";
} else {
    echo "No array received.";
}



echo 'hi its me';
?>