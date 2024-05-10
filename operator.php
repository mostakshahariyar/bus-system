<?php
require_once ("config\getdata.php");

    $sql = "SELECT serial,operator_name FROM operatorlist";
    $result = mysqli_query($con, $sql);
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
                <img src="https://i.ibb.co/JkCMRkq/avatar-people-person-profile-user-women-icon-icon-search-engine-23.png"
                    class="userpic">
                <div>
                    <h2><?php echo $user_row['user_name']; ?></h2>
                    <p><?php echo $user_row['user_email']; ?></p>
                </div>
            </div>
            <ul>
                <li><img src="https://i.ibb.co/xjc8mSN/dashboard.png">
                    <p><a href="mainadmindash.php">Dashboard</a></p>
                </li>
                <li><img src="https://i.ibb.co/5x6gHXf/operator-icon-14.png">
                    <p><a href="operator.php">Operator</a></p>
                </li>
                <li><img src="https://i.ibb.co/X7hhwzy/customers-icon-29.png">
                    <p><a href="customerfmain.php">Customer</a></p>
                </li>
                <li><img
                        src="https://i.ibb.co/Dz5S4C6/admit-one-ticket-icon-black-and-white-isolated-wite-free-vector.jpg">
                    <p><a href="showsellticket.php">Tickets</a></p>
                </li>
                <li><img
                        src="https://i.ibb.co/Xx9XbLV/help-desk-computer-icons-icon-design-technical-support-png-favpng-ZFKe-CZq-Pe-K0-Vnj-E5y-Nddw-FUb-X.jpg">
                    <p><a href="customertext.php">Customers Text</a></p>
                </li>

            </ul>
            <ul>
                <li><img src="https://i.ibb.co/YtX4sSw/logout.png">
                    <p><a href="config/logout.php">Log Out</a></p>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Current Operator List</h2>
                        </div>
                        <div class="card-body">
                            <a href="addnewoperator.php" class="btn btn-primary"
                                style="background-color: blue; margin-bottom: 5px; margin-left: 5px;">Add Operator</a>
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th style="width: auto;">Serial</th>
                                        <th style="width: auto;">Operator Name</th>
                                        <th style="width: 300px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['serial'];
                                        ?>
                                        <tr style="border-bottom: 25px solid transparent;">
                                            <td><?php echo $row['serial'] ?></td>
                                            <td><?php echo $row['operator_name'] ?></td>
                                            <td>
                                                <a href="config/deleteopcon.php?id=<?php echo $id ?>"
                                                    class="btn btn-primary" style="background-color: red;">Delete</a>

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