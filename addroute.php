<?php
    require_once("config\connect.php");
$sql = "SELECT * FROM route";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Route</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/useradmin.css">
  
</head>
<body>
  <div class="header">
  <div class="sidebar">
      <div class="user">
        <img src="https://i.ibb.co/JkCMRkq/avatar-people-person-profile-user-women-icon-icon-search-engine-23.png" class="userpic">
        <div>
          <h2>Admin</h2>
          <p>Adminastration@gmail.com</p>
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
                        <h2 class="display-6 text-center">Current Route List</h2>
                    </div>
                    <div class="card-body">
                        <a href="addnewroute.php" class="btn btn-primary" style="background-color: blue; margin-bottom: 5px; margin-left: 5px;">Add Route</a>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th style="width: auto;">From</th>
                                    <th style="width: auto;">To</th>
                                    <th style="width: 300px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <tr style="border-bottom: 25px solid transparent;">
                                        <td><?php echo $row['From']?></td>
                                        <td><?php echo $row['To']?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary" style="background-color: blue">Edit</a>
                                            <a href="#" class="btn btn-primary" style="background-color: red;">Delete</a>

                                        </td>
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
