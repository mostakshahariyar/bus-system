<?php

require_once('connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $type= $_POST['type'];
    $role= $_POST['role'];
      
    if($con){
        if($type == "customer" && $role == "customer"){
            $sql="UPDATE users SET user_name='$name',user_email='$email' ,user_password='$password',user_type='$type',user_role='$role' WHERE user_email='$email'";
            $result = mysqli_query($con, $sql);
            echo '<script>
            alert("Update successfully");
            window.location.href = "/Bus-Management-system-main/customerfmain.php";
            </script>';
        }
        else if($type == "admin" && $role == "admin"){
            $sql="UPDATE users SET user_name='$name',user_email='$email' ,user_password='$password',user_type='$type',user_role='$role' WHERE user_email='$email'";
            $result = mysqli_query($con, $sql);
            echo '<script>
            alert("Update successfully");
            window.location.href = "/Bus-Management-system-main/customerfmain.php";
            </script>';
        }
        else if($type == "operator"){
            $sql = "SELECT * FROM operatorlist WHERE operator_name = '$role'";
            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count >0){
                $sql="UPDATE users SET user_name='$name',user_email='$email' ,user_password='$password',user_type='$type',user_role='$role' WHERE user_email='$email'";
                $result = mysqli_query($con, $sql);
                echo '<script>
                alert("Update successfully");
                window.location.href = "/Bus-Management-system-main/customerfmain.php";
                </script>';
            }
            else{
                echo '<script>
                alert("Wrong information given");
                window.location.href = "/Bus-Management-system-main/customerfmain.php";
                </script>';
            }

        }
        else{
            echo '<script>
            alert("Wrong information given");
            window.location.href = "/Bus-Management-system-main/customerfmain.php";
            </script>';
        }
    }
    else{
        die(mysqli_error($con));
    }
}
?>