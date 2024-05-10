<?php

require_once('connect.php');
$_SERVER['REQUEST_METHOD']='POST';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstName= $_POST['firstname'];
    $lastName= $_POST['lastname'];
    $email= $_POST['emaill'];
    $mobile= $_POST['mobilee'];
    $message= $_POST['messagee'];
      
    if($con){
        $sql="insert into contractus (FirstName,LastName,Email,Mobile,Message) values ('$firstName','$lastName','$email','$mobile','$message')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo  '<script>
                alert("Submission Successful");
                window.location.href = "/Bus-Management-system-main/contact.php";
            </script>';

        }else{
            echo '<script>
                alert("Submission Unsuccessful");
                window.location.href = "/Bus-Management-system-main/contact.php";
            </script>';
        }
    }
    else{
        die(mysqli_error($con));
    }
}
?>