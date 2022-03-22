<?php
include("functions/session.php");

include "../../../server.php";

if(!(isset($_GET['pdt_id']) && isset($_GET['main_category'])))
{
    header("location: index.php");
}
if(isset($_GET['status'])){
    $data_array = array(
        'pdt_id'=> $_GET['pdt_id'],
        'main_category'=> $_GET['main_category'],
        'status' => $_GET['status']
    );
}
else{
$data_array = array(
        'pdt_id'=> $_GET['pdt_id'],
        'main_category'=> $_GET['main_category']
    );
}
    $data = json_encode($data_array);

    // mobile-curl-call

$url = "http://".$server_name."/admin/seller/dashboard/api/view-item-api.php";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/view-item.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <!-- FONT_AWESOME -->
    <!-- <link href="../../asset/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/custom.css">
 <!-- custom css -->
 <link rel="stylesheet" href="mob-res-admin.css">
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
                                <h6 class="mb-2">All Details of item</h6>
                            </div>
                            
                        </div>
    <div class="ccc">

        <div class="container-fluidd c">
            <div class="wrappper">
                <div class="product-box">
                    <div class="small-images">
                        <img src="<?php echo '../../../image/upload/'.$fetch_data['data']['pdt_image'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo '../../../image/upload/'.$fetch_data['data']['pdt_image2'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo '../../../image/upload/'.$fetch_data['data']['pdt_image3'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo '../../../image/upload/'.$fetch_data['data']['pdt_image4'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo '../../../image/upload/'.$fetch_data['data']['pdt_image'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo '../../../image/upload/'.$fetch_data['data']['pdt_image2'] ?>" alt="" onClick="clickimg(this)">
                    </div>
                    <div id="main-imgg">
                        <img src="<?php echo '../../../image/upload/'.$fetch_data['data']['pdt_image'] ?>" alt="product image" id="imm">
                    </div>
                </div>
                <div class="text-buy">
                    <div class="brand">
                        <p><span>Brand: <?php echo $fetch_data['data']['brand'] ?></span></p>
                        <h2>
                            <?php echo $fetch_data['data']['ad_title'] ?>
                        </h2>
                        <span>(4)</span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star "></span>

                    </div>
                    <div class="price-box">
                        <strike>Price:- &#8377; <?php echo ((25/100)*$fetch_data['data']['set_price'])+$fetch_data['data']['set_price'] ?> </strike>
                        <h4> &#8377; <?php echo $fetch_data['data']['set_price'] ?> </h4>

                    </div>
                    <!-- <p>Color:
                <select name="clr" class="set-ww">
                    <optgroup value="color" label=" COLOR"></optgroup>
                    <option value=""></option>
                    <option value="red">RED</option>
                    <option value="grey">GREY</option>
                    <option value="grey">WHITE</option>
                </select>
            </p> -->
                    <p>
                        Qty:- <input type="number   " value="1" class="set-ww">
                    </p>
                    <?php
                    if($fetch_data['data']['status']=="review")
                    {
                    ?>    
                    <div class="btn-both ">
                    <a href="view-item.php?pdt_id=<?php echo $fetch_data['data']['pdt_id'];?>&main_category=<?php echo $fetch_data['data']['main_category']?>&status=approve"><span class=" btn btn-success" value="approve" name="approve">Approve</span></a>
                    <a href="view-item.php?pdt_id=<?php echo $fetch_data['data']['pdt_id'];?>&main_category=<?php echo $fetch_data['data']['main_category']?>&status=reject"><span class="btn btn-danger" value="reject" name="reject">Reject</span></a>
                    </div>
                    <?php
                    }
                    else if($fetch_data['data']['status']=="approve")
                    {
                    ?>
                    <div class="btn-both ">
                        <span class=" btn btn-success" >&nbsp;Approved</span>
                    </div>
                    <?php
                    }
                    else
                    {
                    ?>
                    <div class="btn-both ">
                        <span class="btn btn-danger" >&nbsp;Rejected</span>
                    </div>
                    <?php
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
    <div class="fetrd">
        <div class="details-ad">
            <h2> FEATURED DETAILS : -</h2><br>
            <div class="row">
                <div class="col-md-6">
                    <ul class="li-cl">
                        <li>Brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                        <li>Buy year :-<?php echo $fetch_data['data']['year'] ?> </li>
                        <li>Location of product :- <?php echo $fetch_data['data']['location'] ?></li>
                        <li>brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="li-cl">
                        <li>Brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                        <li>Buy year :-<?php echo $fetch_data['data']['year'] ?> </li>
                        <li>Location of product :- <?php echo $fetch_data['data']['location'] ?></li>
                        <li>brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                    </ul>
                </div>
            </div>

        </div>
        <br>
        <br>

        <div class="about-ad">
            <h4>About this item:-</h4>
            <br>
            <div class="ad-bt">
                <ul class="li-cl">
                    <li><?php echo $fetch_data['data']['description'] ?></li>
                    <!-- <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatullum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
              
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupidirrupti explicabo similique cupidirrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li> -->
                  
                </ul>
            </div>
        </div>
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
    <!--end wrapper-->
    <!--start switcher-->
    <!-- <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
            <hr />
            <h6 class="mb-0">Sidebar Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--end switcher-->

    <!-- photo change  -->
    <script>
        function clickimg(small) {
            var fullimg = document.getElementById("imm");
            fullimg.src = small.src
        }
    </script>
    <!-- openssl_csr -->
    <script>
        $(document).ready(function() {
            $(".carousel").owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 2000,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    700: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: true
                    }
                }

            })
        })
    </script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            speed: 600,
            parallax: true,
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!-- Bootstrap JS -->   
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--notification js -->
    <!-- <script src="assets/plugins/notifications/js/lobibox.min.js"></script> -->
    <script src="assets/plugins/notifications/js/notifications.min.js"></script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
   
</body>

</html>