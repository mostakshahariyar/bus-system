<?php

require_once ('connect.php');
$_SERVER['REQUEST_METHOD'] = 'POST';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if ($con) {
        $query = "SELECT * FROM users WHERE user_email = '$email' AND user_password =  '$password'";
        $result = mysqli_query($con, $query);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $user_type = $row['user_type'];
            $username=$row['user_name'];
            $sql="DELETE FROM activity;";
            $result = mysqli_query($con ,$sql);
            $sql = "INSERT INTO activity VALUES ('$username','$email','$user_type','YES')";
            $result = mysqli_query($con ,$sql);
            echo '<script>
                window.location.href = "/Bus-Management-system-main/bus.php";
            </script>';
            
        } else {
            echo '<script>
                alert("Login failed. Username or password invalid");
                window.location.href = "/Bus-Management-system-main/loginticket.php";
            </script>';

        }
    } else {
        die(mysqli_error($con));
    }
}
?>