<?php


include "config.php";

$search_value = $_POST['name'];

$sql1 = "SELECT * FROM car_post WHERE ad_title LIKE '%{$search_value}%'";
$result1 = mysqli_query($con,$sql1);
$sql2 = "SELECT * FROM bike_post WHERE ad_title LIKE '%{$search_value}%'";
$result2 = mysqli_query($con,$sql2);
$sql3 = "SELECT * FROM mobile_post WHERE ad_title LIKE '%{$search_value}%'";
$result3 = mysqli_query($con,$sql3);


$output =array();
if(mysqli_num_rows($result1)>0)
{
     
    while($row = mysqli_fetch_assoc($result1))
    {
        $collect = array(
        "data"=> $row
        );
        array_push($output,$collect);
    }
}
if(mysqli_num_rows($result2)>0) 
{
     
    while($row = mysqli_fetch_assoc($result2))
    {
        $collect = array(
        "data"=> $row
        );
        array_push($output,$collect);
    }
}
if(mysqli_num_rows($result3)>0)
{
     
    while($row = mysqli_fetch_assoc($result3))
    {
        $collect = array(
        "data"=> $row
        );
        array_push($output,$collect);
    }
}

foreach ($output as $value)
{   
    if(strlen($value['data']['ad_title'])>25){ 
        $adtitle = str_split($value['data']['ad_title']);
        $showtitle='';
        for($x=0;$x<25; $x++)
        {
            $showtitle = $showtitle.$adtitle[$x];
        }

        $ad_title = $showtitle.'...';
    }
    else
    {
        $ad_title = $value['data']['ad_title'];
    }

   print_r("<div class='col-md-3 col-12'>
                    <a href='single-product.php?pdt_id=".$value['data']['pdt_id']."&main_category=".$value['data']['main_category']."'class='ancher'>
                        <div class='shadow p-3 mb-5 bg-white maindiv'>
                            <div class='img-wh'><img src='image/upload/".$value['data']['pdt_image']."' class='pdt-img'></div>
                            <div class='pdt-details'>
                                <div class='price'> ₹".$value['data']['set_price']."</div>
                                <div class='font-weight-light desc'>".$value['data']['year']."</div>
                                <div class='prd-name'>".$ad_title."</div>
                                <span class='adrs'>".$value['data']['location']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</span><span class='year'>".$value['data']['post_date']."</span>
                                <div class='row p-0 m-0'>
                                    <div class='col p-0'>
                                        <div class='buy-bt'> <a href='single-product.php?pdt_id=".$value['data']['pdt_id']."&main_category=".$value['data']['main_category']."' class='buy-bttn'><i class='fa fa-shopping-cart'>&nbsp;&nbsp;Buy Now</i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>");
}

mysqli_close($con);
?>