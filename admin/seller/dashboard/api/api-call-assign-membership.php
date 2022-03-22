<?php
include "../../../../server.php";
if(isset($_GET['status']))
{
//  include("../server_")  
$url = "http://".$server_name."/admin/seller/dashboard/api/assign-membership-api.php";

$data_array  = array(
    'user_id' => $_GET['user_id'],
    'status' => $_GET['status']
);



$data = json_encode($data_array);
$ch= curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch); 
$status = json_decode($result,true);
// var_dump($status);
if($status)
{
    header("Location: ../profile-user.php?user_id=$_GET[user_id]&status=true");
}

curl_close($ch);
}
?>