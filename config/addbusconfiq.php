<?php

require_once('getdata.php');
$_SERVER['REQUEST_METHOD']='POST';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id= $_POST['busid'];
        $name= $_POST['name'];
        $type= $_POST['type'];
        $From= $_POST['From'];
        $To= $_POST['To'];
        $DTime= $_POST['DTime'];
        $ATime= $_POST['ATime'];
        $Seat= 28;
        $fare= $_POST['fare'];
        $Route= $_POST['Route'];

        if($con){
            if($user_role == $name){
            $query = "SELECT * FROM buslist WHERE id = '$id'";
            $result = mysqli_query($con ,$query); 
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
    
            if($count==0){
                    $sql="INSERT INTO buslist VALUES ('$id','$name','$type','$Route','$From','$DTime','$To','$ATime','$Seat','$fare')";
                    $result = mysqli_query($con,$sql);
                    if($result){
                        echo '<script>
                        alert("New Bus added successfully");
                        window.location.href = "/Bus-Management-system-main/addbus.php";
                    </script>';
                    }
                    else{
                        echo '<script>
                        alert("An error occur");
                        window.location.href = "/Bus-Management-system-main/addbus.php";
                    </script>';
                    }
            }
            else{
                echo '<script>
                    alert("This bus already exist.");
                    window.location.href = "/Bus-Management-system-main/addbus.php";
                </script>';
    
            }
        }
        else{
            echo '<script>
                    alert("You are not authorize person to add this name bus");
                    window.location.href = "/Bus-Management-system-main/addbus.php";
                </script>';
        }
    }
        else{
            die(mysqli_error($con));
        }
    }



?>
