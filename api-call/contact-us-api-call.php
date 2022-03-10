<?php
if(isset($_POST['submit']))
{
   
$url = "http://localhost/fixbuy/api/contact-us-api.php";

$data_array  = array(
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'mobile_no' => $_POST['mobile_no'],
    'message' => $_POST['message'],
    'submit' => $_POST['submit']
);



$data = json_encode($data_array);
$ch= curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch); 
$status = json_decode($result,true);
if($status['status'])
{
    header("Location: ../contact.php");
}
else
{
    echo "please fill all data";  
}

curl_close($ch);
}
?>