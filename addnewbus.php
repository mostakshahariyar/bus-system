<?php
    require_once('config/getdata.php');
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
    <link rel="stylesheet" href="css/style.css">

    <title>Add bus</title>
</head>
<body>
    <div class="header">
        <div class="sidebar">
            <div class="user">
                <img src="https://i.ibb.co/JkCMRkq/avatar-people-person-profile-user-women-icon-icon-search-engine-23.png" class="userpic">
                <div>
                <h2><?php echo $user_row['user_name']; ?></h2>
                <p><?php echo $user_row['user_email']; ?></p>
                </div>
            </div>
            <ul>
                <li><img src="https://i.ibb.co/xjc8mSN/dashboard.png"><p><a href="operatorpannel.php">Dashboard</a></p></li>
                <li><img src="https://i.ibb.co/wYN1BgL/OIP.jpg"><p><a href="addbus.php">Bus</a></p></li>
                <li><img src="https://i.ibb.co/X7hhwzy/customers-icon-29.png"><p><a href="customershow.php">Customer</a></p></li>
                <li><img src="https://i.ibb.co/Dz5S4C6/admit-one-ticket-icon-black-and-white-isolated-wite-free-vector.jpg"><p><a href="showsellticketop.php">Tickets</a></p></li>
                <li><img src="https://i.ibb.co/S58vvpJ/route-icon-png-0.png"><p><a href="addroute.php">Route</a></p></li>
            </ul>
            <ul>
                <li><img src="https://i.ibb.co/YtX4sSw/logout.png"><p><a href="config/logout.php">Log Out</a></p></li>
            </ul>
        </div>  


        <div class="flex  flex-col w-full h-full ">
    <div class="bg-cover bg-no-repeat bg-center h-screen mt-20 bg-black">
        <div class="container">
          <form action="config/addbusconfiq.php" method="POST">
            <h1>Add Bus</h1>
            <input type="text" id="mobile" name="busid" placeholder="Bus ID" required>
            <input type="text" id="mobile" name="name" placeholder="Bus Name" required>
            <input type="text" id="mobile" name="type" placeholder="Bus type" required>
            <input type="text" id="mobile" name="From" placeholder="Depature place" required>
            <input type="text" id="mobile" name="To" placeholder="Arrival place" required>
            <input type="text" id="mobile" name="DTime" placeholder="Dept. Time" required>
            <input type="text" id="mobile" name="ATime" placeholder="Arr. Time" required>
            <input type="text" id="mobile" name="fare" placeholder="Fare" required>
            <input type="text" id="mobile" name="Route" placeholder="Route" required>
            <input type="submit" class="close" value="Add" id="button">
          </form>
        </div>
    </div>
   </div>
        
        
    </div>
</body>
</html>
