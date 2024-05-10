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
    
    <link rel="stylesheet" href="css/styles.css">

    <title>Add New Route</title>
</head>
<body>
    <div class="header">
        <div class="sidebar">
            <div class="user">
                <img src="https://i.ibb.co/JkCMRkq/avatar-people-person-profile-user-women-icon-icon-search-engine-23.png" class="userpic">
                <div>
                    <h2>Admin</h2>
                    <p>Administration@gmail.com</p>
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
        
        <div class="container">
            <div class="signin-signup">
                <form action="config/addnewroadconfiq.php" method="POST" enctype="multipart/form-data" class="sign-in-form">
                    <h2 class="title">New Route</h2>
                    <div class="input-field">
                        <input type="text" name='From' placeholder="Departure Place">
                    </div>
                    <div class="input-field">
                        <input type="text" name='To' placeholder="Arrival Place">
                    </div>
                    <input type="submit" value="Add" class="btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
