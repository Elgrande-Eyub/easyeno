<!DOCTYPE html>
<html lang="zxx">


<head>

    <title>EASYENO Media | حلول تسويقية مبتكرة</title>
    <meta name="description" content="EASYENO Media هي وكالة تسويق رائدة تقدم حلولًا إبداعية وفعّالة. استكشف خدماتنا في التسويق الرقمي وتحسين محركات البحث ووسائل التواصل الاجتماعي. حول وجودك على الإنترنت مع EASYENO Media.">
    @include('arabic.layout.head')

</head>

<body class="main-bg">



    <!-- ==================== Start Loading ==================== -->

    @include('arabic.layout.loading')

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

        @include('arabic.layout.header')

        <!-- ==================== End Navbar ==================== -->

        <div id="smooth-content">

            <main class="main-bg pt-80">


                <!-- ==================== Start product ==================== -->

                <section class="product-details section-padding contact-crev rtl">
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
                                                <h4 class="line-height-1">استئجار استوديو لجلسة تصوير استثنائية</h4>

                                            </div>

                                        </div>
                                        <div class="text mt-30">
                                            <p>نضع تحت تصرفك استوديو الفيديو الخاص بنا  لجميع مشاريعك وإنجازاتك. لا تتردد في الاتصال بنا إذا كنت ترغب في استئجار استوديوهات الفيديو الخاصة بنا لتنظيم مقطعك أو مقابلتك بسعر معقول.

                                            </p>
                                            <br>
                                            <p>    يمكن استئجار استوديو الفيديو الخاص بنا يومًا بعد يوم ويتكيف مع الاحتياجات المختلفة. يمكنك استئجار هذا الموقع كجزء من مشروع سمعي بصري، مهما كانت الطبيعة. من فيديو الشركة إلى إعلان تجاري إلى فيديو موسيقي أو مقابلات، الاحتمالات عديدة. بفضل المعدات عالية الجودة المتاحة، يمكن لمحترفي الصور إطلاق العنان لخيالهم.</p></p>
                                        </div>

                                    </div>
                                    <div class="prod-order pt-30 pb-30 mt-50 bord-thin-top bord-thin-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="ml-auto w-100">
                                                <a href="{{ route('ar-confirmeOrder',['id'=>'videoSession']) }}" class="butn butn-md butn-bord w-100 text-center" >
                                                    <span class="text-u fz-13 ">احجز</span>
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
                        @include('arabic.layout.footer')
                    </div>
                </div>
                @include('arabic.layout.credit')
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
