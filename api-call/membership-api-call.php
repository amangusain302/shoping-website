
<?php
include "../server.php";
?>
<?php
if(isset($_POST['submit']))
{
   
$url = "http://".$server_name."/fixbuy/api/membership-request-api.php";

$data_array  = array(
    'user_id' => $_GET['user_id'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'location' => $_POST['location'],
    'pincode' => $_POST['pincode'],
    'submit' => $_POST['submit']
);



$data = json_encode($data_array);
$ch= curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch); 
var_dump($result);
$status = json_decode($result,true);
// var_dump($status);
if($status)
{
    header("Location: ../membership.php?submit=true");
}
else
{
    echo "please fill all data";  
}

curl_close($ch);
}
?>