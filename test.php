<?php
	session_start();
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
    <link rel="stylesheet" href="single-product.css">
    <link rel="stylesheet" href="heading.css">

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
    <nav class="navbar navbar-expand-lg headerr">
        <div class="container-fluid">

            <div class="logo">
                <a class="navbar-brand" href="#"><img src="image/logo/3.png" alt="logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="inline-menu">
                    <div class="setmnu">

                        <ul class="navbar-nav menu">
                            <li class="nav-item aa">
                                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item aa">
                                <a class="nav-link" href="product.php">PRODUCT</a>
                            </li>
                            <li class="nav-item aa">
                                <a class="nav-link" href="contact.php">CONTACT US</a>
                            </li>
                            <li class="nav-item aa">
                                <a class="nav-link" href="faq.php">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        <div class="row p-0 m-0">
                            <div class="col-12 mainbutton">
                                <a href="<?php
                                            if( isset($_SESSION['username']) )
                                            {
                                                echo "post-product.php";
                                            }
                                            else{
                                                echo "form/login.php";
                                            }?>" class="btn"> + POST PRODUCTS</a>
                            </div>
                        </div>
                    </form>

                </div>


            </div>

        </div>

    </nav>
    <!-- category -->
    <div class="row m-0 p-0">
        <div class="col  p-0">
            <div class="catagry">
                <div class="row catagry-color p-0 m-0">
                    <div class="col-1"><i class="fas fa-grip-lines"></i>&nbsp;&nbsp;<a href="product.php">ALL</a></div>
                    <div class="col-1"><a href="#">BIKES</a></div>
                    <div class="col-1"><a href="#">CARS</a></div>
                    <div class="col-1"><a href="#">PHONE</a></div>
                    <div class="col-1"><a href="service-section.php">SERVICES</a></div>
                    <div class="col-1">
                        <a href="#"></a>
                    </div>
                    <div class="col-1">
                        <a href="#"></a>
                    </div>
                    <div class="col-1">
                        <a href="#"></a>
                    </div>
                    <div class="col-1">
                        <a href="#"></a>
                    </div>
                    <div class="col-1">
                        <a href="#"></a>
                    </div>
                    <!-- <div class="col-1">
                        <a href="#"></a>
                    </div> -->
                    <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Nadeem</p>
                        
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="index.php"><i class="fas fa-home "></i><span>Home</span></a>
                    </li>
                    <li><a class="dropdown-item" href="user-profile.php"><i class="fas fa-user "></i><span>Admin Profile</span></a>
                    </li>

                    <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider of swiper -->
    <!-- Swiper -->

    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
        <div class="parallax-bg" data-swiper-parallax="-23%"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(image/service/newcar.jpg);    height: 40vh;
            background-position: center;
            background-size: cover;">
                <!-- <div class="title" data-swiper-parallax="-300">Slide 1</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="buttonn" data-swiper-parallax="-200"><a href="#" class="btn">+ SELL</a></div> -->
                <div class="text" data-swiper-parallax="-100">
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh
                        euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p> -->
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(image/service/motorcycle.jpg);     height: 40vh;
            
            background-size: cover;background-position: center;">
                <!-- <div class="title" data-swiper-parallax="-300">Slide 2</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> -->
                <!-- <div class="buttonn" data-swiper-parallax="-200"><a href="#" class="btn">+ SELL</a></div> -->
                <div class="text" data-swiper-parallax="-100">
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh
                        euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p> -->
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(image/service/mobile-service.jpg); height: 40vh;
            background-position: center;
            background-size: cover;">
                <!-- <div class="title" data-swiper-parallax="-300">Slide 3</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="buttonn" data-swiper-parallax="-200"><a href="#" class="btn">+ SELL</a></div> -->
                <div class="text" data-swiper-parallax="-100">
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh
                        euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p> -->
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>





   
    <div class="fetrd">
        <div class="details-ad">
            <h2> FEATURED DETAILS : -</h2><br>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>Brand :- Apple</li>
                        <li>Model Name :- Iphone 12</li>
                        <li>Ram :- 8GB</li>
                        <li>Rom :- 128GB</li>
                        <li>Model Name :- Iphone 12</li>
                        <li>Model Name :- Iphone 12</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Brand :- Apple</li>
                        <li>Model Name :- Iphone 12</li>
                        <li>Ram :- 8GB</li>
                        <li>Rom :- 128GB</li>
                        <li>Model Name :- Iphone 12</li>
                        <li>Model Name :- Iphone 12</li>
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
                <ul>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatullum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illuabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupidirrupti explicabo similique cupidirrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperrrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing sectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">

    </div>
    <!-- owl casusal -->
    <div class="carousel owl-carousel">carousel
        <div class="card-testo">

        </div>
        <div class="card-testo">

        </div>
        <div class="card-testo">

        </div>
        <div class="card-testo">

        </div>
    </div>


    <script>
        function clickimg(small) {
            var fullimg = document.getElementById("imm");
            fullimg.src = small.src
        }
    </script>








    <?php include 'footer.php'; ?>

    <!-- bootsrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <!-- Jquery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- custom js -->
    <script src="post.js"></script>
    <!-- 5 version  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Initialize Swiper -->
    <!-- <script>
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
    </script> -->

</body>

</html>