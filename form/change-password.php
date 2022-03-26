<?php
include "../server.php";
?>
<?php
if(isset($_POST['password']))
{
    $url = "http://".$server_name."/api/change-password-api.php";
    $data_array = array(
        'user_id'=> $_GET['user_id'],
        'password'=>$_POST['password']
    );
    
    $data = json_encode($data_array);
    $ch= curl_init();
    
    //grab URL and pass it to the variable.
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     
     
    $result = curl_exec($ch);
    var_dump($result);
    $otp_status = json_decode($result,true);
    var_dump($otp_status);
    
    if($otp_status['status']==true)
    {
        if($otp_status['role']==1)
        {
            header("Location: ../admin/seller/index.php?update=true");
        }else
        {
            header("Location: login.php?update=true");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:00 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixebuy</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme12.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="../seller/">
                                <div class="logo">
                                    <!-- <img class="logo-size" src="images/logo-light.svg" alt=""> -->
                                    <h1 class="fw-bold text-white">Welcome to FixeBuy</h1>
                                </div>
                            </a>
                        </div>

                        <h3>Change Password</h3>
                        <!-- <p>Access to the most powerfull tool in the entire design and web industry.</p> -->
                        <form action="http://<?php echo $server_name ?>/form/change-password.php?user_id=<?php echo $_GET['user_id'];?>" method="post">
                            <input class="form-control text-dark shadow-none" id="txtPassword" type="password" name="password" placeholder="Password" required>
                            <input class="form-control text-dark shadow-none" id="txtConfirmPassword" type="password" name="checkpassword" placeholder="confirm Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" value="true" name="verify" class="ibtn w-100 p-2 login-bt " onclick="return Validate()">Change Password</button>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
        <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:01 GMT -->

</html>
