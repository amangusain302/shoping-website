<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "../../../../api/config.php";

$user_id = $data['user_id'];

$sql ="select * from user where user_id = $user_id;";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);
    $data = array(
        'data' => $row
    );
    
    echo json_encode($data);
}



?>