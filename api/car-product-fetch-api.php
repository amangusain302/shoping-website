<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";
$sql = "SELECT * FROM car_post WHERE status = 'Approve'";
$result = mysqli_query($con,$sql) or die("query failed");

if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);  
}else{
    echo json_encode(array('message' => 'No recorde Found.','status'=> false));
}
?>