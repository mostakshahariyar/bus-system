<?php
require_once ('config/getdata.php');

    // Fetch user's ticket history
    $ticket_query = "SELECT * FROM buslist JOIN sellticket ON buslist.id = sellticket.busid WHERE sellticket.cus_email= '{$user_row['user_email']}'";
    $ticket_result = mysqli_query($con, $ticket_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UserPanel</title>
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
          <li>
              <img src="https://i.ibb.co/xjc8mSN/dashboard.png">
              <p><a href="userdashboard.php?email=<?php echo $user_row['user_email']; ?>">Dashboard</a></p>
          </li>
      </ul>
      <ul>
      <li><img src="https://i.ibb.co/YtX4sSw/logout.png"><p><a href="config/logout.php">Log Out</a></p></li>
      </ul>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card mt-5" id="activeTickets">
            <div class="card-header mb-5">
              <h2 class="display-6 text-center">Tickets History</h2>
            </div>
            <div class="card-body text-center"> 
              <div class="table-container1">
                <table class="table">
                  <tr style="border-bottom: 25px solid transparent;">
                    <td style="width: 150px;">Bus Name</td>
                    <td style="width: 150px;">From</td>
                    <td style="width: 150px;">To</td>
                    <td style="width: 150px;">Seat</td>
                    <td style="width: 150px;">Fare</td>
                    <td style="width: 150px;">Journey Date</td>
                  </tr>
                  <?php 
                  while ($row = mysqli_fetch_array($ticket_result)) {
                    ?>
                  <tr style="border-bottom: 25px solid transparent;">
                    <td style="width: 150px;"><?php echo $row['name']; ?></td>
                    <td style="width: 150px;"><?php echo $row['dept_place']; ?></td>
                    <td style="width: 150px;"><?php echo $row['arr_place']; ?></td>
                    <td style="width: 150px;"><?php echo $row['seat']; ?></td>
                    <td style="width: 150px;"><?php echo $row['fare']; ?></td>
                    <td style="width: 150px;"><?php echo $row['journey_date']; ?></td>
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
  </div>
</body>
</html>
