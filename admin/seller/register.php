<?php
include "../../server.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:14 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fixeBuy</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme12.css">
    <link rel="stylesheet" href="css/custom.css">
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
                                    <h1 class="fw-bold text-white">Welcome to FixeBuy</h1>
                                </div>
                            </a>
                        </div>

                        <?php
                            if (isset($_GET['token'])==1)
                            {
                                ?>
                                <div class ="alert alert-danger" style="background-color: #d50000" >oops!&nbsp;&nbsp;&nbsp;these credentials are in already used</div>
                            <?php
                            }
                            ?>  

                        <h3>Become a Admin</h3> 

                        <div class="page-links">
                            <a href="index.php">Login</a><a href="register.php" class="active">Register</a>
                        </div>
                        <form action="http://<?php echo $server_name; ?>/fixbuy/api-call/register-api-call.php" method="post">
                            <input class="form-control shadow-none text-dark" type="text" name="username" placeholder="Username" required>
                            <input class="form-control shadow-none text-dark" type="email" name="user_email" placeholder="E-mail Address" required>
                            <input class="form-control shadow-none text-dark" type="password" name="password" placeholder="Password" required>
                            <input type="hidden" name="role" value="1">
                            <div class="form-button">
                                <button id="submit" type="submit" value="true" name="submit" class="ibtn w-100 p-2 bg-warning ">Register</button>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:14 GMT -->

</html>