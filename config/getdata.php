<?php
require_once('connect.php');

// Fetch data from the activity table
$query = "SELECT * FROM activity";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

// Use prepared statement to fetch data from activity and users tables
$user_query = "SELECT * FROM activity JOIN users ON activity.email = users.user_email WHERE activity.email = ?";
$user_stmt = mysqli_prepare($con, $user_query);
mysqli_stmt_bind_param($user_stmt, "s", $row['email']);
mysqli_stmt_execute($user_stmt);
$user_result = mysqli_stmt_get_result($user_stmt);
$user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
?>
