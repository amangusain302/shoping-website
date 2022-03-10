<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "config.php";

$pdt_id = $data['pdt_id'];
$main_category = $data['main_category'];

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