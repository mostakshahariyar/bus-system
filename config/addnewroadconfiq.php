<?php

require_once('connect.php');
$_SERVER['REQUEST_METHOD']='POST';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $From= $_POST['From'];
    $To= $_POST['To'];
      
    if($con){
        $query = "SELECT * FROM route WHERE `From` = '$From' AND `To` = '$To'";

        $result = mysqli_query($con ,$query); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==0){
            $sql = "INSERT INTO route (`From`, `To`) VALUES ('$From', '$To')";

            $result=mysqli_query($con,$sql);
        
            if($result){
                echo '<script>
                    alert("New Route added successfully");
                    window.location.href = "/Bus-Management-system-main/addroute.php";
                </script>';
            }
            else{
                echo '<script>
                    alert("An error occurred");
                    window.location.href = "/Bus-Management-system-main/addroute.php";
                </script>';

            }
        }
        else{
            echo '<script>
                alert("This route already exists.");
                window.location.href = "/Bus-Management-system-main/addroute.php";
            </script>';

        }
    }
    else{
        die(mysqli_error($con));
    }
}
?>