<?php
include "server.php";
?>
<?php
session_start();
// user-curl-call
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- sweiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="heading.css">
    <link rel="stylesheet" href="tab-res.css">
    <link rel="stylesheet" href="mob-res.css">
    <link rel="stylesheet" href="image-upload.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- cdn js css for owl crausal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- cdn js for owl crausal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <style>
        .swiper {
            width: 100%;
            height: 100%;
            background: #000;
        }

        .swiper-slide {
            font-size: 18px;
            color: #fff;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 60px;
        }

        .parallax-bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 130%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }

        .swiper-slide .title {
            font-size: 41px;
            font-weight: 300;
        }

        .swiper-slide .subtitle {
            font-size: 21px;
        }

        .swiper-slide .text {
            font-size: 14px;
            max-width: 400px;
            line-height: 1.3;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <!--content start  -->
    <div class="container">

        <div class="page-wrapper">

            <div class="page-content ">
                <br>
            <?php
            if(isset($_GET['status']))
            {
            ?>
            <div class="alert alert-success">
                    <strong>Update Success!</strong>
            </div>
            <?php
            }
            ?>


                <h5 class="my-2">User Profile</h5>



                <div class="card">

                <form action="api-call/profile-update-api-call.php?user_id=<?php echo $fetch_user_data['data']['user_id'] ?>&status=true" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        
                        <div class="myi">
                            <div class="row">
                                <div class="col d-flex align-items-center justify-content-center">
                                    <div class=" image-upload my-2 p-2 border  bg-white ">
                                        <div class="preview-container shadow">
                                            <img src="<?php if($_SESSION['user_image']!=null){echo "image/profile-image/".$fetch_user_data['data']['user_image'];}else{echo "image/testo/1.png";}  ?>" >
                                            <span class="fileName d-block my-2"></span>
                                            <div class="icon-container bg-secondary ">
                                                <i class="fas fa-times icon text-white"></i>
                                            </div>
                                        </div>
                                        <input type="file" name="user_image"  class="form-control w-100 my-2 shadow-none fileUpload">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control shadow-none text-capitalize" placeholder="Full Name" contenteditable="true" name="username" value="<?php echo $fetch_user_data['data']['username']; ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control shadow-none" placeholder="Email" contenteditable="true" name="user_email" value="<?php echo $fetch_user_data['data']['user_email']; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control shadow-none" placeholder="Phone" contenteditable="true" name="phone" value="<?php echo $fetch_user_data['data']['phone']; ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">D.O.B</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="date" class="form-control shadow-none text-secondary" placeholder="Date of Birth " name="date_of_birth" id="" contenteditable="true" value="<?php echo $fetch_user_data['data']['date_of_birth']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control shadow-none" placeholder="Full address" contenteditable="true" name="address" value="<?php echo $fetch_user_data['data']['address']; ?>"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0" >Adhaar Number </h6>
                            </div>
                            <!-- <div class="col-sm-9 text-secondary">
                            <div class=" image-upload my-2 p-2 border  bg-white " id="user-file">
                                <div class="preview-container">
                                    <img src="assets/images/icons/upload_icon.svg">
                                    <span class="fileName d-block my-2">No file chosen</span>
                                    <div class="icon-container bg-secondary ">
                                        <i class="fas fa-times icon text-white"></i>
                                    </div>
                                </div>
                                <input type="file" class="form-control w-100 my-2 shadow-none user-fileUpload">
                            </div>
                        </div> -->
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="adhaar_no" placeholder="Number" value="<?php echo $fetch_user_data['data']['adhaar_no']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="submit" name="update" class="btn btn-color  px-4 submitBtn" value="Update"  />
                            </div>
                        </div>
                        
                    </div>
                    </form>
                </div>

                <!-- end row -->
            </div>
        </div>

    </div>







    <!-- footer -->

    <?php
   include "footer.php"
   ?>
    <!-- <footer>
        <div class="footer">
            <di class="row p-0 m-0">
                <div class="col-md-3 col-12">
                    <div class="footerlogo">
                        <img src="image/logo/FB-white.png" alt="logo" class="footer-logo">
                    </div>
                    <div class="pp">
                        <p><i class="far fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp; Noida Sector-64 , UP</p>
                        <p><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;&nbsp;&nbsp; 9891****91
                        </p>
                        <p><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; xyz@gmail.com</p>
                    </div>


                </div>
                <div class="col-md-3 col-12">
                    <div class="subhead">
                        menu
                    </div>
                    <div class="menuu">
                        <ul class="submenuu">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="#">PROPERTIES</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="subhead">
                        Learn More
                    </div>

                    <ul class="sub-head">
                        <li><a href="#">PRIVACY</a></li>
                        <li><a href="#">TERM & CONDITION</a></li>
                        <li><a href="#">ACCOUNT</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-12">
                    <div class="subhead">
                        Get IN Touch
                    </div>
                    <div class="social">
                        <a href="#"><img src="image/white/1.png" alt=""></a>
                        <a href="#"><img src="image/white/2.png" alt=""></a>
                        <a href="#"><img src="image/white/3.png" alt=""></a>
                    </div>
                </div>
        </div>
        </div>
        <div class="copyright">
            <hr>
            <div class="row copyrightt p-0 m-0">
                <div class="col-md-6 col-12 foocet">@copyright 2021 - Fixebuy.in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| </div>
                <div class="col-md-6 col-12 mobcopy"> All rights reserved</div>
            </div>

        </div>
    </footer> -->
    <!-- bootsrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <!-- 5 version  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
    <script src="http://localhost/api-call/search-call.js"></script>
    <!-- slider of swiper -->
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
    <!-- GetButton.io widget -->
    <!-- <script type="text/javascript">
        (function() {
            var options = {
                call: "+1 8322329150",
                call_to_action: "Get Appointment",
                position: "right",
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script> -->
    <!-- /GetButton.io widget -->
    <!-- owl testomnial-->
    <script>
        $(document).ready(function() {
            $(".carousel").owlCarousel({
                loop: true,
                margin: 50,

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
                        items: 3,
                        nav: true,
                        loop: true
                    }
                }
            })
        })
    </script>
    <script>
        // image upload js
$('document').ready(() => {
    console.log('true');
    $('.icon-container').click(function () {
        console.log('remove');
        var tag = document.activeElement;
        console.log(tag);
        var img = $(this).parent().find('img');
        var text = $(this).parent().find('.fileName');

        img.attr('src', 'upload_icon.svg');
        img.css('width', '50%');
        text.html('No file Chosen ');
        $(this).css('display', 'none');
    });
    
    
    $('.fileUpload').on('change', function () {

        var tag = document.activeElement;
        var img = tag.previousElementSibling.firstElementChild;
        var text = tag.previousElementSibling.children[1];
        var cancel = tag.previousElementSibling.children[2];

        if (this.files[0]) {
            const reader = new FileReader();
            reader.onload = function () {
                const result = reader.result;
                // console.log(result);
                img.style.width = '90%';
                img.src = result;


            }
            text.innerHTML = this.files[0].name;
            cancel.style.display = "flex";
            reader.readAsDataURL(this.files[0]);
        }

    })
})
    </script>

</body>

</html>