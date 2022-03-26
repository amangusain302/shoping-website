<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "config.php";

$search_value = $data['search'];
$output = array();

$sql1 = "SELECT car_post.*
FROM user
INNER JOIN car_post
ON user.user_id=car_post.user_id
WHERE user.status='active' AND car_post.status='approve' AND car_post.ad_title LIKE '%{$search_value}%';";
 
$result = mysqli_query($con,$sql1);
$query = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($query as $value){
    array_push($output,$value);
}


$sql2 = "SELECT bike_post.*
FROM user
INNER JOIN bike_post
ON user.user_id=bike_post.user_id
WHERE user.status='active' AND bike_post.status='approve' AND ad_title LIKE '%{$search_value}%';";

$result = mysqli_query($con,$sql2);
$query = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($query as $value){
    array_push($output,$value);
}


$sql3 = "SELECT mobile_post.*
FROM user
INNER JOIN mobile_post
ON user.user_id=mobile_post.user_id
WHERE user.status='active' AND mobile_post.status='approve' AND ad_title LIKE '%{$search_value}%';";

$result = mysqli_query($con,$sql3) or die("query failed");
$query = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($query as $value){
    array_push($output,$value);
}


$sql4 = "SELECT car_post.*
FROM user
INNER JOIN car_post
ON user.user_id=car_post.user_id
WHERE user.status='free' AND car_post.status='approve'  AND ad_title LIKE '%{$search_value}%';";

$result = mysqli_query($con,$sql4) or die("query failed");
$query = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($query as $value){
    array_push($output,$value);
}


$sql5 = "SELECT bike_post.*
FROM user
INNER JOIN bike_post
ON user.user_id=bike_post.user_id
WHERE user.status='free' AND bike_post.status='approve'  AND ad_title LIKE '%{$search_value}%';";

$result = mysqli_query($con,$sql5) or die("query failed");
$query = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($query as $value){
    array_push($output,$value);
}


$sql6 = "SELECT mobile_post.*
FROM user
INNER JOIN mobile_post
ON user.user_id=mobile_post.user_id
WHERE user.status='free' AND mobile_post.status='approve'  AND ad_title LIKE '%{$search_value}%';";

$result = mysqli_query($con,$sql6) or die("query failed");
$query = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($query as $value){
    array_push($output,$value);
}

if($output>0){
    echo json_encode($output);  
}else{
    echo json_encode(array('message' => 'No recorde Found.','status'=> false));
}
?>  