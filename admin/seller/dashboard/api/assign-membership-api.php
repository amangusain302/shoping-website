<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "../../../../api/config.php";

$user_id = $data['user_id'];
$status = $data['status'];

$sql = "UPDATE `user` SET `status`='$status' WHERE user_id = $user_id ;";

$result = mysqli_query($con, $sql);

if($result==true)
{
    echo json_encode($data);
}
else
{
    echo "please try again later";  
}



?>