<!---------Footer-------->
<footer id="footer" style="border-top: 1px solid #b6adad70;">


    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="logoft"><a href="index.php"><img class="logo" src="images/logof.png" style="width: 100%;
              height: auto;">
                        </a></div>

                    <h4 class="text-center">Creating value since 2009</h4>
                    <div class="ts"><i class="fa fa-star starr"></i>
                        Sky Real Properties</div>
                    <div class="ts"><i class="fa fa-star starr"></i>
                        Sky Real Solution</div>
                </div>


                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 footer-links">
                    <h4>Quick Links</h4>
                    <ul class="ftlist">
                        <li><i class="fa-solid fa-chevron-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i> <a href="project.php">Project</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i> <a href="contact.php">Contact</a></li>
                    </ul>
                </div>


                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 footer-links">
                    <h4>CONTACT DETAILS</h4>
                    <p>House No C-32 (A), Gandharba Bhawan , Srasta Homes, City Garden Road, Raghunathpur, Nandankanan, Bhubaneswar, Khurda, Odisha, pin-751024
                    </p>
                    <br>
                    <span>
                        <strong><i class="fa fa-phone phh"></i>&nbsp;</strong> <a href="tel:+91 9040264935" style="text-decoration: none;">9040264935</a>
                        <br>

                        </i>
                        <a href="tel:+91 9853004444" class="mrr" style="text-decoration: none;">9853004444</a><br>
                        <a href="tel:+91 9937222223" class="mrr" style="text-decoration: none;">9937222223</a>
                    </span>
                    <br>
                    <br>
                    <span>
                        <strong><i class="fa fa-envelope phh"></i>&nbsp;</strong> <a href="mailto:info@gmail.com" style="text-decoration: none;">info@skyreal.com</a></i>
                    </span>

                </div>
            </div>
            <div class="row">
                <div class="social-links mt-3 soc">
                    <a href="https://twitter.com/shreesaicreati3" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/shreesaicreation1/?ref=pages_you_manage" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/srisaicreation7/" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://in.pinterest.com/sanjaykhemka65/" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UCigo6jzV_A4vNuoI4hEEojw" class="youtube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ftt">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p style="text-align: center;color: #fff;"> Design & Developed By <a href="https://hlswebsolution.in/">HLS Web solution.</a>  </a>
                </p>
            </div>
        </div>
    </div>
</footer>



<!---------Footer-------->





<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="#" class="float" target="_blank">
    <i class="fa fa-share-alt" style="color:white;"></i>
</a>
</div>


<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <i class="fa-solid fa-arrow-up"></i>
</a>



</body>
<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- Owl carousel -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script type="text/javascript">
    (function($) {
        'use strict';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 2
                }
            }
        })

    })(jQuery);
</script>

<script>
    (() => {
        const counter = document.querySelectorAll('.counter');
        // covert to array
        const array = Array.from(counter);
        // select array element
        array.map((item) => {
            // data layer
            let counterInnerText = item.textContent;

            let count = 1;
            let speed = item.dataset.speed / counterInnerText

            function counterUp() {
                item.textContent = count++
                if (counterInnerText < count) {
                    clearInterval(stop);
                }
            }
            const stop = setInterval(() => {
                counterUp();
            }, speed);
        })
    })()
</script>
<script src="js/aos.js"></script>
<script src="js/scroll.js"></script>
<script src="js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</html>