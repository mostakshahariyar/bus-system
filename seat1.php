<?php
require_once ('config/getdata.php');

// Check if the database connection is established successfully
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete all records from 'selected' table
$sql_delete = "DELETE FROM selected";
if (!mysqli_query($con, $sql_delete)) {
    echo "Error deleting records: " . mysqli_error($con);
}

// Check if 'busid' and 'date' parameters are set in the URL
if (isset($_GET['busid']) && isset($_GET['date'])) {
    $id = $_GET['busid'];
    $date = $_GET['date'];

    // Fetch bus details from 'buslist' table based on 'id'
    $query = "SELECT * FROM buslist WHERE id ='$id'";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "Error fetching bus details: " . mysqli_error($con);
    } else {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

    // Fetch bus details again (optional)
    $sql_s = "SELECT * FROM buslist WHERE id='$id'";
    $result_s = mysqli_query($con, $sql_s);
    if (!$result_s) {
        echo "Error fetching bus details: " . mysqli_error($con);
    } else {
        $row_s = mysqli_fetch_array($result_s, MYSQLI_ASSOC);
    }

    // Fetch sold tickets count for the specified bus and date
    $sql_sold = "SELECT * FROM sellticket WHERE busid= '$id' AND journey_date = '$date'";
    $result_sold = mysqli_query($con, $sql_sold);
    if (!$result_sold) {
        echo "Error fetching sold tickets: " . mysqli_error($con);
    } else {
        $count_seat = mysqli_num_rows($result_sold);
    }

    // Calculate remaining seats
    $left_seat = $row_s['seat'] - $count_seat;
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $row['name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;1,800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Raleway", sans-serif;
        }

        .op {
            border-bottom: 2px solid #1dd100;
        }
    </style>
</head>

<body>

    <div id="hi">
        <div id="Hero-t"
            class="bg-[#F7F8F8] border-t-[4px] border-solid border-[#67f851] rounded-[80px] lg:mt-[80px] min-h-screen w-full">
            <div
                class="h-[418px] flex flex-col lg:flex-row w-full m-[10px] lg:w-[1170px] lg:m-auto mt-[50px] rounded-3xl p-8 bg-white">
                <div class="w-full lg:w-[800px] h-[320px]">
                    <div class="h-[72px] w-full flex justify-between">
                        <div class="flex w-full justify-between items-center">
                            <img class="" src="https://i.ibb.co/1MrxbTd/bus-logo.png" alt="" />
                            <div class="ml-5 mt-2">
                                <h1 class="text-[18px] font-[700] hidden lg:block">
                                    <?php echo $row['name']; ?>
                                </h1>
                                <h6 class="hidden lg:block"><?php echo $row['type']; ?></h6>
                            </div>
                            <a class="btn bg-[#1dd1001a] text-[#67f851]"><img src="./images/seat-green.png" alt="" />
                                <span id="four">
                                    <?php echo $left_seat; ?>
                                </span>
                                Seat Left
                            </a>
                        </div>
                    </div>

                    <div class="bg-[#F7F8F8] w-full h-[258px] rounded-xl mt-6 p-6">
                        <div class="flex justify-between border-b-2 border-dotted border-gray-300 p-[10px]">
                            <h4>Route</h4>

                            <h4><?php echo $row['route']; ?></h4>
                        </div>
                        <div class="flex mt-6 justify-between border-b-2 border-dotted border-gray-300 p-[10px]">
                            <h4>Departure Time</h4>

                            <h4><?php echo $row['dept_time']; ?></h4>
                        </div>

                        <div class="flex justify-between">
                            <div
                                class="bg-[#0307120D] p-2 lg:p-[20px] mt-[10px] lg:mt-[35px] rounded-lg text-[#030712CC]">
                                Boarding point - <?php echo $row['dept_place']; ?>
                            </div>
                            <div class="bg-[#0307120D] p-2 lg:p-[20px] mt-[10px] lg:mt-[35px

] rounded-lg text-[#030712CC]">
                                Dropping Point - <?php echo $row['arr_place']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <img class="h-full ml-[20px] hidden lg:block" src="https://i.ibb.co/3k7mcNV/info-devider.png" alt="" />

                <div class="text-center flex flex-col justify-center mt-[60px] lg:mt-0 items-center ml-14 space-y-2">
                    <img src="https://i.ibb.co/brRdsvN/fare.png" alt="" />
                    <h1 class="font-[700] text-[28px]"><span id="perSeatTaka"><?php echo $row['fare']; ?></span>
                        TAKA</h1>
                    <p>Per Seat</p>
                </div>
            </div>
            <section class="flex flex-col lg:flex-row w-full h-full m-[10px] lg:w-[1170px] lg:m-auto pb-10 gb-red-500">
                <div class="right w-[65%] mb-10 h-full  p-5">
                    <h1>Select Your Seat</h1>

                    <div
                        class="flex justify-between py-3 border-t-[2px] border-b-[2px] mt-[10px] border-gray-600 border-dotted">
                        <div class="flex">
                            <img src="https://i.ibb.co/m8VF0rR/seat-gray.png" alt="" />
                            <p>Available</p>
                        </div>
                        <div class="flex">
                            <img src="https://i.ibb.co/8Kwdrs1/b4504969b49d200de36ab51f779156ec-single-seat-sofa-icon-by-vexels.png"
                                alt="" style="width: 28px; hieght: 28px" />
                            <p>Booked</p>
                        </div>
                        <div class="flex">
                            <img src="https://i.ibb.co/QMv4vmK/seat-green.pnghttps://i.ibb.co/QMv4vmK/seat-green.png"
                                alt="" />
                            <p>Selected</p>
                        </div>
                    </div>

                    <div class="mt-5 flex justify-end">
                        <kbd class="bg-slate-300 flex justify-center p-2 rounded-3xl w-[110px] h-[56]"><img
                                class="m-auto" src="./images/Vector.png" alt=""></kbd>
                    </div>

                    <div class="mb-10 w-full h-full">
                        <div class="flex justify-between mt-6">
                            <div class="mt-5 flex items-center justify-center space-x-7">
                                <p>A</p>
                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'A1'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>A1</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">A1</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'A2'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>A2</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">A2</kbd>';
                                    }
                                ?>
                            </div>
                            <div class="mt-5 flex items-center justify-center space-x-7">
                            <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'A3'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>A3</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">A3</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'A4'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>A4</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">A4</kbd>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="flex justify-between mt-6">
                            <div class="mt-5 flex items-center justify-center space-x-7">
                                <p>B</p>
                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'B1'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>B1</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">B1</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'B2'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>B2</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">B2</kbd>';
                                    }
                                ?>
                            </div>
                            <div class="mt-5 flex items-center justify-center space-x-7">
                            <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'B3'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>B3</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">B3</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'B4'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>B4</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">B4</kbd>';
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="flex justify-between mt-6">
                            <div class="mt-5 flex items-center justify-center space-x-7">
                                <p>C</p>
                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'C1'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>C1</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">C1</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'C2'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>C2</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">C2</kbd>';
                                    }
                                ?>
                            </div>
                            <div class="mt-5 flex items-center justify-center space-x-7">
                            <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'C3'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>C3</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">C3</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'C4'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>C4</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">C4</kbd>';
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="flex justify-between mt-6">
                            <div class="mt-5 flex items-center justify-center space-x-7">
                                <p>D</p>
                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'D1'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>D1</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">D1</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'D2'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>D2</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">D2</kbd>';
                                    }
                                ?>
                            </div>
                            <div class="mt-5 flex items-center justify-center space-x-7">
                            <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'D3'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>D3</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">D3</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'D4'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>D4</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">D4</kbd>';
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="flex justify-between mt-6">
                            <div class="mt-5 flex items-center justify-center space-x-7">
                                <p>E</p>
                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'E1'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>E1</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">E1</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'E2'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>E2</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">E2</kbd>';
                                    }
                                ?>
                            </div>
                            <div class="mt-5 flex items-center justify-center space-x-7">
                            <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'E3'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>E3</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">E3</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'E4'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>E4</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">E4</kbd>';
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="flex justify-between mt-6">
                            <div class="mt-5 flex items-center justify-center space-x-7">
                                <p>F</p>
                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'F1'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>F1</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">F1</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'F2'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>F2</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">F2</kbd>';
                                    }
                                ?>
                            </div>
                            <div class="mt-5 flex items-center justify-center space-x-7">
                            <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'F3'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>F3</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">F3</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'F4'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>F4</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">F4</kbd>';
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="flex justify-between mt-6">
                            <div class="mt-5 flex items-center justify-center space-x-7">
                                <p>G</p>
                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'G1'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>G1</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">G1</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'G2'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>G2</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">G2</kbd>';
                                    }
                                ?>
                            </div>
                            <div class="mt-5 flex items-center justify-center space-x-7">
                            <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'G3'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>G3</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">G3</kbd>';
                                    }
                                ?>

                                <?php
                                    $sql= "SELECT * FROM sellticket WHERE (busid= '$id' and journey_date = '$date') and seat = 'G4'" ;
                                    $result = mysqli_query($con,$sql);
                                    if (!$result) {
                                        echo "Error fetching select seat: " . mysqli_error($con);
                                    } else {
                                        $count_seat = mysqli_num_rows($result);
                                    }
                                    if($count_seat>0){
                                        echo '<kbd class="bg-purple-200 py-3 px-5 rounded" disable>G4</kbd>';
                                    }
                                    else{
                                        echo '<kbd class="kbd cursor-pointer bg-gray-200 py-3 px-5 rounded">G4</kbd>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- left -->
                <div class="left w-[35%] p-5">
                    <h1>Select Your Seat</h1>
                    <hr class="mt-3" />

                    <div class="w-full bg-white min-h-[100px] text-center pt-3 rounded-2xl mt-3">
                        <div class="grid grid-cols-3">
                            <div>Seat <span id="zero" class="bg-[#1DD100] p-2 rounded-sm">0</span></div>
                            <div>Class</div>
                            <div>price</div>
                        </div>



                        <hr class="mt-4  kok" />

                        <div id="pll">

                        </div>

                        <div class="flex justify-between mt-2 p-3">
                            <h1>Total Price</h1>
                            <h1>BDT <span id="bdt1">0</span></h1>
                        </div>

                        <div class="flex p-4">
                            <input id="in" type="text" placeholder="Type here"
                                class="input input-bordered w-full max-w-xs" />
                            <button id="ds" class="btn">Apply</button>
                        </div>
                        <div class="flex justify-between mt-2 p-3">
                            <h1>Grand Total</h1>
                            <h1>BDT <span id="grando">0</span></h1>
                        </div>
                    </div>
                    <a id="don" href="finish.php?id=<?php echo $id; ?>&name=<?php echo $row['name']; ?>&date=<?php echo $date; ?>" class="btn w-full bg-[#1DD100] mt-4 text-white">NEXT</a>
                    <div class="flex justify-around mt-4">
                        <a class="text-blue-400 underline cursor-pointer">Terms and conditions</a>
                        <a class="text-blue-400 underline cursor-pointer">Cancilation policy</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="js/seat.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>
```
