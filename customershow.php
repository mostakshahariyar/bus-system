<?php
    require_once("config\getdata.php");
$sql = "SELECT user_name,user_email,user_type FROM users where user_type='customer'";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operator List</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/useradmin.css">
  
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

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Customers list</h2>
                    </div>
                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th style="width: auto;">Name</th>
                                    <th style="width: auto;">Email</th>
                                    <th style="width: auto;">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <tr style="border-bottom: 25px solid transparent;">
                                        <td><?php echo $row['user_name']?></td>
                                        <td><?php echo $row['user_email']?></td>
                                        <td><?php echo $row['user_type']?></td>
                                    </tr>
                                    <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
