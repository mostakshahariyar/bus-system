<?php 
require_once('config/getdata.php');

if(isset($_GET['mail'])) {
    $u_email = $_GET['mail'];

    // Fetch user data from the database
    $u_sql = "SELECT * FROM users WHERE user_email=?";
    $u_stmt = mysqli_prepare($con, $u_sql);
    mysqli_stmt_bind_param($u_stmt, "s", $u_email);
    mysqli_stmt_execute($u_stmt);
    $u_result = mysqli_stmt_get_result($u_stmt);
    $u_row = mysqli_fetch_array($u_result, MYSQLI_ASSOC);
} else {
    // Redirect user if 'mail' parameter is not provided
    header("Location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/useradmin.css">
    <link rel="stylesheet" href="css/login.css">
    
    <!-- External CSS file for color styling -->
    <link rel="stylesheet" href="css/styles.css">

    <title>Add New Operator</title>
</head>
<body>
    <div class="header">
        <div class="sidebar">
            <div class="user">
                <img src="https://i.ibb.co/JkCMRkq/avatar-people-person-profile-user-women-icon-icon-search-engine-23.png" class="userpic">
                <div>
                    <h2><?php echo $u_row['user_name']; ?></h2>
                    <p><?php echo $u_row['user_email']; ?></p>
                </div>
            </div>
            <ul>
                <li><img src="https://i.ibb.co/xjc8mSN/dashboard.png"><p><a href="operator.php">Dashboard</a></p></li>
                <li><img src="https://i.ibb.co/5x6gHXf/operator-icon-14.png"><p><a href="operator.php">Operator</a></p></li>
                <li><img src="https://i.ibb.co/X7hhwzy/customers-icon-29.png"><p><a href="operator.php">Customer</a></p></li>
                <li><img src="https://i.ibb.co/Dz5S4C6/admit-one-ticket-icon-black-and-white-isolated-wite-free-vector.jpg"><p><a href="operator.php">Tickets</a></p></li>
                <li><img src="https://i.ibb.co/Xx9XbLV/help-desk-computer-icons-icon-design-technical-support-png-favpng-ZFKe-CZq-Pe-K0-Vnj-E5y-Nddw-FUb-X.jpg"><p><a href="Customers Text">Operator</a></p></li>
                <li><img src="https://i.ibb.co/qJTNmNJ/members.png"><p><a href="operator.php">Profile</a></p></li>
            </ul>
            <ul>
                <li><img src="https://i.ibb.co/YtX4sSw/logout.png">
                <p><a href="config/logout.php">Log Out</a></p>
                </li>
            </ul>
        </div>
        
        <div class="container">
            <div class="signin-signup">
                <form action="config/updateuserconfig.php" method="POST" enctype="multipart/form-data" class="sign-in-form">
                    <h2 class="title">Update Users Data</h2>
                    <div class="input-field">
                        <input type="text" value="<?php echo $u_row['user_name']; ?>" name='name' placeholder="User Name">
                    </div>
                    <div class="input-field">
                        <input type="text" value="<?php echo $u_row['user_email']; ?>" name='email' placeholder="User Email">
                    </div>
                    <div class="input-field">
                        <input type="text" value="<?php echo $u_row['user_password']; ?>" name='password' placeholder="User Password">
                    </div>
                    <div class="input-field">
                        <input type="text" value="<?php echo $u_row['user_type']; ?>" name='type' placeholder="User type">
                    </div>
                    <div class="input-field">
                        <input type="text" value="<?php echo $u_row['user_role']; ?>" name='role' placeholder="User Role">
                    </div>
                    <input type="submit" value="Update" class="btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
