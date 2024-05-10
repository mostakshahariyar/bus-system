<?php
require_once('config/getdata.php');

// Count customer number
$query_cus = "SELECT COUNT(*) AS cus_count FROM users WHERE user_type = 'customer'";
$result_cus = mysqli_query($con, $query_cus);
$count_cus_row = mysqli_fetch_assoc($result_cus);
$count_cus = $count_cus_row['cus_count'];

// Count selling ticket number
$query_tic = "SELECT COUNT(*) AS tic_count FROM sellticket WHERE busname='{$user_row['user_role']}'";
$result_tic = mysqli_query($con, $query_tic);
$count_tic_row = mysqli_fetch_assoc($result_tic);
$count_tic = $count_tic_row['tic_count'];

// Count bus number
$query_bus = "SELECT COUNT(*) AS bus_count FROM buslist WHERE name='{$user_row['user_role']}'";
$result_bus = mysqli_query($con, $query_bus);
$count_bus_row = mysqli_fetch_assoc($result_bus);
$count_bus = $count_bus_row['bus_count'];

// Count total route number
$query_rou = "SELECT COUNT(*) AS rou_count FROM route";
$result_rou = mysqli_query($con, $query_rou);
$count_rou_row = mysqli_fetch_assoc($result_rou);
$count_rou = $count_rou_row['rou_count'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration</title>
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
          <div class="col-lg-6 ">
            <div class="box box-blue">
              <div class="inner">
                <h3><?php echo $count_bus; ?></h3>
                <p>Bus</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="addbus.php" class="box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    
          <div class="col-lg-6">
            <div class="box box-green">
              <div class="inner">
                <h3><?php echo $count_cus; ?></h3>
                <p>Customers</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="customershow.php" class="box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
    
          <div class="col-lg-6">
            <div class="box box-red">
              <div class="inner">
                <h3><?php echo $count_tic; ?></h3>
                <p>Tickets Sell</p>
              </div>                                   
              <a href="showsellticketop.php" class="box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    
          <div class="col-lg-6">
            <div class="box box-pink">
              <div class="inner">
                <h3><?php echo $count_rou; ?></h3>
                <p>Routes</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="addroute.php" class="box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
      </div>
      


  </div>



</body>
</html>
