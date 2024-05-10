<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="css\login.css">
    <title>Signin and Signup</title>
</head>

<body>
    <?php
    require_once ('config/connect.php');
    $query = "SELECT * FROM activity";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $status = $row['status'];
    if ($status == "YES") {
        $name = $row["username"];
        $email = $row["email"];
        $user_type = $row["type"];
        if ($user_type == 'customer') {
            echo '<script>
                    window.location.href = "userdashboard.php";
                </script>';
        } elseif ($user_type == 'operator') {
            echo '<script>
                    window.location.href = "operatorpannel.php";
                </script>';
        } elseif ($user_type == 'admin') {
            echo '<script>
                    window.location.href = "mainadmindash.php";
                </script>';
        }
    }
    ?>
    <div class="container">
        <div class="signin-signup">
            <form action="config/loginconfiq.php" method="POST" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name='email' placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <a href="#" class="forgot-password">Forgot password?</a>
                <input type="submit" value="Login" class="btn">
                <p>Don't have an account? <a href="#" class="account-text" id="sign-up-link">Sign up</a></p>
            </form>
            <form action="config\signup.php" method="POST" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn">
                <p>Already have an account? <a href="#" class="account-text" id="sign-in-link">Sign in</a></p>
            </form>
        </div>
    </div>
    <script src="js\signup.js"></script>
</body>

</html>