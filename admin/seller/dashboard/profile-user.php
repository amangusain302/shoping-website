<?php
include("functions/session.php");
include "../../../server.php";
$data_array = array(
    "user_id" => $_GET['user_id']
);
 $data = json_encode($data_array);

 $url = "http://".$server_name."/admin/seller/dashboard/api/user-detail-api.php";
 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);

$fetch_user_data = json_decode($result, true);

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
    <!-- custom css -->
    <link rel="stylesheet" href="user.css" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <!-- FONT_AWESOME -->
    <!-- <link href="../../asset/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/custom.css">

    <title>Fixebuy</title>
</head>

<body onload="info_noti()">
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

            <div class="page-content ">
                <h5 class="my-2">User Details</h5>

                <?php
                if(isset($_GET['status']))
                {
                ?>
                <div class="alert alert-success" role="alert">
                Changes Updated.
                </div>
                <?php
                }   
                ?>

                <div class="card">
                    <table>
                        <div class="col text-secondary uss">
                            <div class=" image-upload my-2 p-2 border  bg-white " id="user-file">
                                <div class="preview-container">
                                    <img  src="<?php if($fetch_user_data['data']['user_image']!=null){ echo "../../../image/profile-image/".$fetch_user_data['data']['user_image']; } else { echo "../../../image/testo/1.png"; }?>">
                                    <span class="fileName d-block my-2"></span>
                                    <div class="icon-container bg-secondary ">
                                        <i class="fas fa-times icon text-white"></i>
                                    </div>
                                </div>
                                <!-- <input type="file" class="form-control w-100 my-2 shadow-none user-fileUpload" contenteditable="true"> -->
                            </div>
                        </div>
                        <tr align="justify">
                            <th>Full Name</th>
                            <th>-</th>
                            <td><?php echo $fetch_user_data['data']['username']; ?></td>
                        </tr>
                        <tr align="justify">
                            <th>Email</th>
                            <th>-</th>
                            <td><?php echo $fetch_user_data['data']['user_email']; ?></td>
                        </tr>
                        <tr align="justify">
                            <th>Phone</th>
                            <th>-</th>
                            <td><?php echo $fetch_user_data['data']['phone']; ?></td>
                        </tr>
                        <tr align="justify">
                            <th>D.O.B</th>
                            <th>-</th>
                            <td><?php echo $fetch_user_data['data']['date_of_birth']; ?></td>
                        </tr>
                        <tr align="justify">
                            <th>Address</th>
                            <th>-</th>
                            <td><?php echo $fetch_user_data['data']['address']; ?></td>
                        </tr>
                        <tr align="justify">
                            <th>Id proof (Adhaar Only)</th>
                            <th>-</th>
                            <td><?php echo $fetch_user_data['data']['adhaar_no']; ?></td>
                        </tr>
                        <tr align="center">
                            <td class="viw sbb sb"  colspan="1">
                                <a href="single-user-items.php?user_id=<?php echo $fetch_user_data['data']['user_id']; ?>&username=<?php echo $fetch_user_data['data']['username']; ?>">View user listing   </a>
                            </td>
                            <td   colspan="1">
                            </td>
                            <?php
                                if( $fetch_user_data['data']['status']=="free")
                                {
                            ?>
                            <td class="viw sbb sb"  colspan="1">
                                <a href="api/api-call-assign-membership.php?user_id=<?php echo $fetch_user_data['data']['user_id']; ?>&status=active">Assign Membership</a>
                            </td>
                            <?php
                                }
                                else
                                {
                            ?>
                            <td class="viw sbb sb"  colspan="1">
                                <a href="api/api-call-assign-membership.php?user_id=<?php echo $fetch_user_data['data']['user_id']; ?>&status=free">Deny Membership</a>
                            </td>
                            <?php
                                }
                            ?>
                        </tr>
                        


                    </table>




                </div>
            </div>
        </div>
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>

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
    <!-- <script src="assets/plugins/notifications/js/notifications.min.js"></script> -->
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>


</body>

</html>