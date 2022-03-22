<?php

header('Content-Type: application/json');   
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "../../../../api/config.php";   

$pdt_id = $data['pdt_id'];
$main_category = $data['main_category'];


if(isset($data['status']))
{
$status = $data['status'];

$status_query1 = "UPDATE `bike_post` SET `status` ='$status' WHERE pdt_id = $pdt_id and main_category= '$main_category' and status = 'review';";  
$status_update = mysqli_query($con,$status_query1);

$status_query2 = "UPDATE `car_post` SET `status` ='$status' WHERE pdt_id = $pdt_id and main_category= '$main_category' and status = 'review';";
$status_update = mysqli_query($con,$status_query2);

$status_query3 = "UPDATE `mobile_post` SET `status` ='$status' WHERE pdt_id = $pdt_id and main_category= '$main_category' and status = 'review';";
$status_update = mysqli_query($con,$status_query3);

}

$sql1 = "SELECT * FROM car_post WHERE pdt_id='$pdt_id' AND main_category='$main_category'";
$result1 = mysqli_query($con,$sql1);
$sql2 = "SELECT * FROM bike_post WHERE pdt_id='$pdt_id' AND main_category='$main_category'";
$result2 = mysqli_query($con,$sql2);
$sql3 = "SELECT * FROM mobile_post WHERE pdt_id='$pdt_id' AND main_category='$main_category'";
$result3 = mysqli_query($con,$sql3);


$collect =array();
if(mysqli_num_rows($result1)>0)
{
     
    while($row = mysqli_fetch_assoc($result1))
    {
        $collect = array(
        "data"=> $row
        );
    }
}
if(mysqli_num_rows($result2)>0) 
{
     
    while($row = mysqli_fetch_assoc($result2))
    {
        $collect = array(
        "data"=> $row
        );
    }
}
if(mysqli_num_rows($result3)>0)
{
     
    while($row = mysqli_fetch_assoc($result3))
    {
        $collect = array(
        "data"=> $row
        );
    }
}

echo json_encode($collect);

?>