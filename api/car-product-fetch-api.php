<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$output = array();

$sql = "SELECT car_post.*
FROM user
INNER JOIN car_post
ON user.user_id=car_post.user_id
WHERE user.status='active' AND car_post.status='approve';";

$result = mysqli_query($con,$sql) or die("query failed");
$query = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($query as $value){
    array_push($output,$value);
}


$sql1 = "SELECT car_post.*
FROM user
INNER JOIN car_post
ON user.user_id=car_post.user_id
WHERE user.status='free' AND car_post.status='approve';";

$result1 = mysqli_query($con,$sql1) or die("query failed");
$query = mysqli_fetch_all($result1, MYSQLI_ASSOC);

foreach($query as $value){
    array_push($output,$value);
}

if($output>0){
    echo json_encode($output);  
}else{
    echo json_encode(array('message' => 'No recorde Found.','status'=> false));
}
?>