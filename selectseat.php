<?php
    $selectedSeats = json_decode($_GET['seat'],true);
    echo 'ami';
    if($con){
        $sql = "INSERT INTO selectseat (seat) VALUES ('$selectedSeats')";
        $result=mysqli_query($con,$sql);
    }
    else{
        die(mysqli_error($con));
    }
?>
