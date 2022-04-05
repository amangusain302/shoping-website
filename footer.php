<?php
include "server.php";
?>

        <!-- footer -->
        <footer>
            <div class="footer">
                <di class="row p-0 m-0">
                    <div class="col-md-4 col-12">
                        <div class="footerlogo">
                            <a href="index.php"><img src="image/logo/FB-white.png" alt="logo" class="footer-logo"></a>
                        </div>
                        <div class="pp">
                            <p><i class="far fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp; Noida Sector-64 , UP</p>
                            <p><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;&nbsp;&nbsp; 9891****91
                            </p>
                            <p><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; xyz@gmail.com</p>
                        </div>


                    </div>
                    <div class="col-md-4 col-12">
                        <div class="subhead">
                            menu
                        </div>
                        <div class="menuu">
                            <ul class="submenuu">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="contact.php">CONTACT US</a></li>
                                <li><a href="#">PROPERTIES</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-6">
                        <div class="subhead">
                            Learn More
                        </div>

                        <ul class="sub-head">
                            <li><a href="#">PRIVACY</a></li>
                            <li><a href="#">TERM & CONDITION</a></li>
                            <li><a href="#">ACCOUNT</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-4 col-12">
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
                    <div class="col-md-12 col-12 foocet">@copyright 2021 - Fixebuy.in </div>                   
                 <!-- <div class="col-md-6 col-12 mobcopy"> All rights reserved</div>  -->
            </div>
            <div class="learn-more">
            <a class="col-md-6 col-6 " href="#">Privacy Policy</a>
            <a class="col-md-6 col-6 " href="#">Term & Condition</a>
            </div>

        </div>
        </footer>
        <!-- bootsrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <!-- 5 version  -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- slider of swiper -->
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


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
        <script src="http://<?php echo $server_name; ?>/api-call/search-call.js"></script>
     
    </body>


</html>