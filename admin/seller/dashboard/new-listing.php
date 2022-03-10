<?php
include("functions/session.php");
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

    <title>PropertyZone Seller</title>
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
                    <h4 class="logo-text">Property Zone</h4>
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
                <h5 class="my-2">Add New Property</h5>
                <div class="card">
                    <div class="card-body">
                        <form class="mx-2">
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h6 class="my-1">Property Name</h6>
                                        <input type="text" class="form-control shadow-none" id="propertyName" placeholder="Enter property name">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h6 class="my-1">Selling Price</h6>
                                        <input type="text" class="form-control shadow-none" id="sellingPrice" placeholder="In Lacs">
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h6 class="my-1">Category</h6>
                                        <!-- <label for="Category" class="my-1  fs-6 text-dark "></label> -->
                                        <select name="Category" id="Category" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="Rent">Rent</option>
                                            <option value="Sell">Sell</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Category</h6>
                                        <label for="Area" class="my-1  fs-6 text-dark">Area</label>

                                        <div class="row m-0 p-0">
                                            <div class="col-7 p-0">
                                                <input type="text" class="form-control shadow-none" id="Area" placeholder="In Lacs">
                                            </div>
                                            <div class="col-5">
                                                <select name="areaMeasure" id="areaMeasure" class="shadow-none form-select">
                                                    <option value="sqft">sqft</option>
                                                    <option value="sqyrd">sqyrd</option>
                                                    <option value="acre">acre</option>
                                                    <option value="bigha">bigha</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Bedroom</h6>
                                        <select name="Bedroom" id="Bedroom" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="1">1 Bedroom</option>
                                            <option value="2">2 Bedrooms</option>
                                            <option value="3">3 Bedrooms</option>
                                            <option value="4">4 Bedrooms</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Bathroom</h6>
                                        <select name="Bathroom" id="Bathroom" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="1">1 Bathroom</option>
                                            <option value="2">2 Bathrooms</option>
                                            <option value="3">3 Bathrooms</option>
                                            <option value="4">4 Bathrooms</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Status</h6>
                                        <select name="Bedroom" id="Bedroom" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="Ready to move">Ready to move</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Balconies</h6>
                                        <select name="Bathroom" id="Bathroom" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="1">1 Balcony</option>
                                            <option value="2">2 Balconies</option>
                                            <option value="3">3 Balconies</option>
                                            <option value="4">4 Balconies</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Car Parking</h6>
                                        <select name="CarParking" id="CarParking" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="none">none</option>
                                            <option value="availble">available</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Furnished Status</h6>
                                        <select name="FurnishedStatus" id="FurnishedStatus" class=" shadow-none form-select">
                                            <option value="" class=" text-secondary"></option>
                                            <option value="Unfurnished">Unfurnished</option>
                                            <option value="Furnished">Furnished</option>

                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Lift</h6>
                                        <select name="Lift" id="Lift" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="none">none</option>
                                            <option value="availble">available</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h6 class="my-1">Water Availability</h6>
                                        <select name="FurnishedStatus" id="FurnishedStatus" class=" shadow-none form-select">
                                            <option value="" class="text-secondary"></option>
                                            <option value="none">None</option>
                                            <option value="availabe">available</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <div class="form-group">
                                    <h6 class="my-1">Upload Property Images</h6>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class=" image-upload my-2 p-1 border bg-white">
                                                    <div class="preview-container">
                                                        <img src="assets/images/icons/upload_icon.svg">
                                                        <span class="fileName d-block my-2">No file chosen</span>
                                                        <div class="icon-container  bg-secondary">
                                                            <i class="fas fa-times icon  text-white"></i>
                                                        </div>

                                                    </div>

                                                    <input type="file" class="form-control w-100 my-2 shadow-none fileUpload">

                                                </div>
                                            </div>
                                            <div class="col-md-3 ">
                                                <div class=" image-upload my-2 p-2 border  bg-white ">
                                                    <div class="preview-container">
                                                        <img src="assets/images/icons/upload_icon.svg">
                                                        <span class="fileName d-block my-2">No file chosen</span>
                                                        <div class="icon-container bg-secondary ">
                                                            <i class="fas fa-times icon text-white"></i>
                                                        </div>
                                                    </div>
                                                    <input type="file" class="form-control w-100 my-2 shadow-none fileUpload">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class=" image-upload my-2 p-2 border  bg-white ">
                                                    <div class="preview-container">
                                                        <img src="assets/images/icons/upload_icon.svg">
                                                        <span class="fileName d-block my-2">No file chosen</span>
                                                        <div class="icon-container bg-secondary ">
                                                            <i class="fas fa-times icon text-white"></i>
                                                        </div>

                                                    </div>

                                                    <input type="file" class="form-control w-100 my-2 shadow-none fileUpload">

                                                </div>
                                            </div>
                                            <div class="col-md-3 ">

                                                <div class=" image-upload my-2 p-2 border bg-white">
                                                    <div class="preview-container">
                                                        <img src="assets/images/icons/upload_icon.svg">
                                                        <span class="fileName d-block my-2">No file chosen</span>
                                                        <div class="icon-container bg-secondary ">
                                                            <i class="fas fa-times icon text-white"></i>
                                                        </div>

                                                    </div>

                                                    <input type="file" class="form-control w-100 my-2 shadow-none fileUpload">

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary  submitBtn mb-5 ">List Property</button>
                        </form>
                    </div>
                </div>



                <!-- end row -->
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