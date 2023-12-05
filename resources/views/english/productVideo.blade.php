<!DOCTYPE html>
<html lang="zxx">


<head>

    <title>EASYENO Media | Innovative Marketing Solutions</title>
    <meta name="description" content="EASYENO Media is a leading marketing agency offering creative and effective solutions. Explore our services in digital marketing, search engine optimization, and social media. Shape your online presence with EASYENO Media.">
    @include('english.layout.head')

</head>

<body class="main-bg">



    <!-- ==================== Start Loading ==================== -->

    @include('english.layout.loading')

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->

    <div id="smooth-wrapper">

        <!-- ==================== Start Navbar ==================== -->

        @include('english.layout.header')

        <!-- ==================== End Navbar ==================== -->

        <div id="smooth-content">

            <main class="main-bg pt-80">


                <!-- ==================== Start product ==================== -->

                <section class="product-details section-padding contact-crev ">
                    <div class="bg-pattern bg-img" data-background="assets/imgs/patterns/bg-lines-1.svg" style="z-index:-100;background-image: url(&quot;assets/imgs/patterns/bg-lines-1.svg&quot;);"></div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="img-preview md-mb50">
                                    <div class="gallery-top">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="assets/imgs/blog/h2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div class="product-info">
                                    <div class="top-info">
                                        <h6 class="main-color4">DH 1,200.00</h6>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="line-height-1">Rent a Video Studio for an Exceptional Shooting Session</h4>
                                            </div>
                                        </div>
                                        <div class="text mt-30">
                                            <p>We offer our dedicated video studio for all your projects and achievements. Feel free to contact us if you want to rent our video studios to organize your clip or interview at a reasonable price.</p>
                                            <br>
                                            <p>You can rent our video studio day by day and adapt it to various needs. You can rent this location as part of an audiovisual project, whatever its nature. From corporate video to commercial advertising to a music video or interviews, the possibilities are numerous. With the high-quality equipment available, professional photographers can unleash their imagination.</p>
                                        </div>
                                    </div>
                                    <div class="prod-order pt-30 pb-30 mt-50 bord-thin-top bord-thin-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="ml-auto w-100">
                                                <a href="{{ route('en-confirmeOrder',['id'=>'videoSession']) }}" class="butn butn-md butn-bord w-100 text-center">
                                                    <span class="text-u fz-13">Book Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- ==================== End product ==================== -->


            </main>


            <!-- ==================== Start Footer ==================== -->

            <footer class="pt-80 sub-bg">
                <div class="footer-container">
                    <div class="container pb-80">
                        @include('english.layout.footer')
                    </div>
                </div>
                @include('english.layout.credit')
                </div>
            </footer>

            <!-- ==================== End Footer ==================== -->


        </div>
    </div>







    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/smoother-script.js"></script>

    <script src="assets/js/price-range.js"></script>

    <!-- custom scripts -->
    <script src="assets/js/scripts.js"></script>

</body>


<!-- Mirrored from ui-themez.smartinnovates.net/items/geekfolio/dark/shop-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 10:43:41 GMT -->
</html>
