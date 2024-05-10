<?php 
    require_once('config/getdata.php');
    $query= "SELECT * FROM buslist WHERE name = '{$user_row['user_role']}' ";

    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Route</title>
  
  <link rel="stylesheet" href="css/useradmin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
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
                        <h2 class="display-6 text-center">Current Route List</h2>
                    </div>
                    <div class="card-body">
                        <a href="addnewbus.php" class="btn btn-primary" style="background-color: blue; margin-bottom: 5px; margin-left: 5px;">Add Bus</a>
                        <table class="table text-center">
                        <tr style="border-bottom: 25px solid transparent;">
                        <td style="width: 150px;">ID</td>
                            <td style="width: 150px;">Operator</td>
                            <td style="width: 150px;">Dept. Time</td>
                            <td style="width: 150px;">Arr. Time</td>
                            <td style="width: 150px;">Seat Available</td>
                            <td style="width: 150px;">Fare</td>
                            <td style="width: 150px;"></td>
                        </tr>
                        <?php 
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr style="border-bottom: 25px solid transparent;">
                        <td><?php echo $row['id']?></td>
                            <td>
                                <ul class="text-left" style="list-style-type:none; ">
                                <li style="color: green; font-weight: bold; font-size: 21px; text-align: left;"><?php echo $row['name']; ?></li>
                                    <li><?php echo $row['type'] ?></li>
                                    <li><b>Route:</b><?php echo $row['route'] ?></li>
                                    <li><b>Departure Place:</b><?php echo $row['dept_place'] ?></li>
                                    <li><b>Arrival Place:</b><?php echo $row['arr_place'] ?></li>
                                </ul>
                            </td>
                            <td><?php echo $row['dept_time']?></td>
                            <td><?php echo $row['arr_time']?></td>
                            <td><?php echo $row['seat']?></td>
                            <td><?php echo $row['fare']?></td>
                            <td>
                                <a href="config/deletebus.php?id=<?php echo $row['id']  ?>" class="btn btn-primary" style="background-color: red;">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
