<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "config.php";

$user_email = $data['user_email'];
$otp = $data['otp'];

$sql = "select * from user where otp = $otp and user_email = '$user_email';";
$query = mysqli_query($con,$sql);

$result = mysqli_num_rows($query);
if($result>0)
{
    while($row = mysqli_fetch_assoc($query)){
        $status = array("status"=> true,
                        "user_id"=> $row["user_id"],
                        );
    }
    echo json_encode($status);
}
else
{
    $status = array("status"=> false,
                        );
    echo json_encode($status);
}