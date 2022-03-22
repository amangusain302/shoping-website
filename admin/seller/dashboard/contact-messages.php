<?php

include("functions/session.php");
include "../../../server.php";
// fetch

$url = "http://".$server_name."/admin/seller/dashboard/api/contact-message-api.php";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);


$fetch_data = json_decode($result, true);



curl_close($ch);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <!-- <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" /> -->
    <!--plugins-->
    <!-- <link href="assets/plugins/notifications/css/lobibox.min.css" rel="stylesheet"/> -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <!-- FONT_AWESOME -->
    <!-- <link href="../../asset/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/custom.css">

    <title>FixeBuy</title>
</head>

<body >
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <!-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> -->
                </div>
                <div>
                    <h4 class="logo-text">FixeBuy</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>

            <!--navigation-->
            <?php include("functions/admin_sidebar.php"); ?>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <?php include("functions/admin_header.php"); ?>
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                

                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-2">Contact Messages</h6>
                            </div>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>

                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Message </th>
                                        <th>Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                     foreach ($fetch_data as $value) {
                                 ?>
                                    <tr>
                                        <td><?php echo $value['first_name']." ".$value['last_name']; ?></td>
                                        <td><?php echo $value['email'] ?></td>
                                        <td><?php echo $value['mobile_no'] ?></td>
                                        <td><?php echo $value['message'] ?></td>
                                        <td><?php echo $value['covo_time'] ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

               
                <!--end row-->
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--><a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <!--notification js -->
    <!-- <script src="assets/plugins/notifications/js/lobibox.min.js"></script> -->
    <script src="assets/plugins/notifications/js/notifications.min.js"></script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
    <script>
function status() {
    if(document.getElementsByClassName("approve"))
    {
    document.getElementsByClassName("approve").innerHTML= '<i class="fa fa-check fa-2x" aria-hidden="true"></i>';
    }
    else{
        document.getElementsByClassName("reject").innerHTML = '<i class="fa fa-times fa-2x" aria-hidden="true"></i>';
    }
  
}
    </script>
</body>

</html> 