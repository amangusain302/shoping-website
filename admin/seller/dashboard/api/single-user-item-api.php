<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "../../../../api/config.php";

$user_id = $data['user_id'];


$output = array();
$sql1 = "SELECT * FROM mobile_post WHERE user_id='$user_id'";
$result1 = mysqli_query($con,$sql1) or die("query failed");
$query = mysqli_fetch_all($result1, MYSQLI_ASSOC);
foreach($query as $value){
    array_push($output,$value);
}

$sql2 = "SELECT * FROM car_post WHERE user_id='$user_id' ";
$result2 = mysqli_query($con,$sql2) or die("query failed");
$query = mysqli_fetch_all($result2, MYSQLI_ASSOC);
// print_r($query);
foreach($query as $value){
    array_push($output,$value);
}

$sql3 = "SELECT * FROM bike_post WHERE user_id='$user_id' ";
$result3 = mysqli_query($con,$sql3) or die("query failed");
$query = mysqli_fetch_all($result3, MYSQLI_ASSOC);
foreach($query as $value){
    array_push($output,$value);
}

function sortarray($a,$b){
    // Turn your strings into dates, and then subtract them
    // to get a value that is either negative, positive, or zero.
    return strtotime($b['post_date']) - strtotime($a['post_date']);
  };
  usort($output,"sortarray");
echo json_encode($output);
?>