<?php


$url = "http://localhost/fixbuy/api/register-api.php";
$data_array = array(
    'username' => $_POST['username'],
    'user_email'=> $_POST['user_email'],
    'password'=> $_POST['password'],
    'role' => $_POST['role'],
    'submit'=> $_POST['submit']
);

$data = json_encode($data_array);
$ch= curl_init();

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$result = curl_exec($ch); 
print_r($result);
$status = json_decode($result,true);
print_r($status);

if (isset($status['status']))
{   
    // echo $status['status'];
    if($status['role']==1)
    {
        echo "true";
        header("Location:../admin/seller/index.php?created=true");
    }
    else{
    echo "true";
    header("Location:../form/login.php?created=true");
    }
}
else
{
    // echo $status['status'];
    if($status['role']==1)
    {
    echo "false";
    header("Location:../admin/seller/register.php?token=true");
    }
    else{
    echo "false";
    header("Location:../form/register.php?token=true");
    }
}

curl_close($ch);
?>      