<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Title  -->
    <title>EASYENO Media | حلول تسويقية مبتكرة</title>
    <meta name="description" content="EASYENO Media هي وكالة تسويق رائدة تقدم حلولًا إبداعية وفعّالة. استكشف خدماتنا في التسويق الرقمي وتحسين محركات البحث ووسائل التواصل الاجتماعي. حول وجودك على الإنترنت مع EASYENO Media.">
    @include('arabic.layout.head')

</head>

<body class="home-main-crev main-bg ">



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

            <main class="main-bg" >

                <!-- ==================== Start Slider ==================== -->
                <header class="header-startup  full-height valign bg-img parallaxie container1 rtl" data-background="#" data-overlay-dark="7" style="background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 0px; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                    <video autoplay loop muted plays-inline class="background-clip">
                        <source src="{{ asset('backgorund-Video.mp4') }}" type="video/mp4">
                    </video>
                    <div class="container ontop" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="caption text-center mt-50">
                                    <div class="sec-lg-head">
                                        <h6 class="dot-titl colorbg-3 mb-10">وكالة تسويق</h6>
                                    </div>
                                    <h1 class="fw-700 fz-80 ">
                                        <h1 style="  text-align: center; " >
                                            هنا شريكك التقني الأمثل
                                    </h1>
                                    <h4 style="margin-top: 1rem">بحر من الإلهام يأخذ أعمالك إلى آفاق جديدة..</h4>
                                    <h6  class="stroke">مع  EASYENO MEDIA</h6>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="arrow-down main-bg">
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-for-tablet">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.835489 6.51022L15.5607 6.51022L10.9081 1.85764C10.5179 1.46747 10.9555 1.24491 11.3626 0.837776C11.7697 0.430646 11.9923 -0.00687319 12.3825 0.383293L18.7406 6.74141C19.1307 7.13158 19.117 7.77791 18.7099 8.18504L12.0753 14.8196C11.6682 15.2267 11.371 14.7053 11.0739 14.4081C10.7767 14.111 10.2553 13.8138 10.6624 13.4067L15.5173 8.55182L0.792051 8.55182L0.835489 6.51022Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <div defer class="bg-pattern-half bg-img opacity-5" data-background="{{ asset('assets/imgs/svg-assets/patern-bg.webp') }}" style="background-image: url(&quot;assets/imgs/svg-assets/patern-bg.webp&quot;);"></div>
                </header>

                <section class="about-intro section-padding contact-crev">
                    <section  style="padding-bottom: 4rem">
                        <div class="container">
                            <div class="row mb-80 rtl">
                                <div class="col-lg-5">
                                    <div class="sec-lg-head md-mb30">
                                        <h6 class="dot-titl colorbg-3 mb-10">لماذا عليك اختيارنا</h6>
                                        <h2 class="d-rotate wow">
                                            <span class="rotate-text">تعرّف علينا عن قرب</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-2 valign">
                                    <div class="text">
                                        <p class="d-slideup wow">
                                            <span class="sideup-text">
                                                <span class="up-text">اختيارنا يوفر عليك البحث عن أفكار تسويقية وأساليب لعرض المنتجات وكيفية استهداف الفئة المستهدفة                                            </span>
                                            </span>
                                        </p>
                                        <div class="vew-all mt-50 ml-30 wow fadeIn" data-wow-delay=".8s">
                                            <a href="{{ ('about-ar') }}">شاهد كل فريقنا
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.6120 12.2344 13.5002 12.2344C13.3883 12.2344 13.2810 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.7170 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.2830 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.6120 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.9220 4.38811 13.9220 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-5 valign rest rtl" >
                                    <div class="cont" style="margin-right: 1rem">

                                        <div class="feat " style="padding:0.5rem">
                                            <div class="item-flex d-flex align-items-center mb-50 wow fadeIn" data-wow-delay=".4s">
                                                <div>
                                                    <div class="icon-img-50">
                                                        <img src="{{ asset('assets/imgs/serv-icons/0.webp') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="cont mr-30">
                                                    <h6> الابداع
                                                    </h6>
                                                    <p class="fz-15">لأن الإبداع أصله فكرة .. نستلهم أفكارنا الإبداعية من بيئتنا المحلية وننفذها بمقاييس عالمية</p>
                                                </div>
                                            </div>
                                            <div class="item-flex d-flex align-items-center mb-50 wow fadeIn" data-wow-delay=".4s">
                                                <div>
                                                    <div class="icon-img-50">
                                                        <img src="{{ asset('assets/imgs/serv-icons/1.webp') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="cont mr-30">
                                                    <h6>التميز</h6>
                                                    <p class="fz-15">سمتنا اللي نسمو بها في مشاريعنا وعملياتنا الإبداعية</p>
                                                </div>
                                            </div>
                                            <div class="item-flex d-flex align-items-center wow fadeIn" data-wow-delay=".8s" >
                                                <div>
                                                    <div class="icon-img-50">
                                                        <img src="{{ asset('assets/imgs/serv-icons/2.webp') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="cont mr-30">
                                                    <h6>التطور</h6>
                                                    <p class="fz-15">نتطور لنطوّر ونستمر في عمليتنا التطويرية لنرتقي بعملائنا</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 rest videoPres" style="display:flex;">
                                    <video style="width:100%;border-radius:20px" autoplay loop muted plays-inline >
                                        <source src="{{ asset('backgorund-Video.mp4') }}" type="video/mp4">
                                    </video>

                                </div>

                            </div>

                        </div>
                    </section>


                    <section class="marquee">
                        <div class="container-fluid rest">
                            <div class="row">
                                <div class="col-12">
                                    <div class="main-marq">
                                        <div class="slide-har st1">
                                            <div class="box non-strok">
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>هوية العلامة التجارية والتصميم</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>تطوير المواقع والتطبيقات</span> <span
                                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>التسويق الرقمي</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>حملات الإعلان</span> <span
                                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>مقاطع الفيديو التسويقية</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>إدارة وسائل التواصل الاجتماعي</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="box non-strok">
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>هوية العلامة التجارية والتصميم</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>تطوير المواقع والتطبيقات</span> <span
                                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>التسويق الرقمي</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>حملات الإعلان</span> <span
                                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>مقاطع الفيديو التسويقية</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>إدارة وسائل التواصل الاجتماعي</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="serv-box section-padding pb-0 rtl ">
                        <div class="container rtl process">
                            <div class="sec-lg-head mb-80">
                                <div class="row ">
                                    <div class="col-lg-8">
                                        <div class="position-re">
                                            <h6 class="dot-titl colorbg-3 mb-10">خدمات مميزة</h6>
                                            <h2 class="d-rotate wow">
                                                <span class="rotate-text">خدمات EASYENO</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-flex align-items-center">
                                        <div class="text wow fadeIn">
                                            <p>هنا تبدأ رحلة مشروعك، حيث تصبح الخبرة عامل التغيير في اللعبة.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4" >
                                    <div class="serv-item lg-pad md-mb50 radius-5 wow fadeIn" data-wow-delay=".5s">
                                        <div class="icon-img-50 mb-40">
                                            <img src="assets/imgs/serv-icons/0.webp" alt="">
                                        </div>
                                        <span class="mb-10 opacity-7">تصميم المنتج</span>
                                        <h6 class="mb-15">التسويق الرقمي</h6>
                                        <p class="fz-14">التسويق الرقمي لزيادة وجودك على الإنترنت والوصول إلى جمهور عالمي.</p>
                                        <div class="crv-more">
                                            <a href="#" class="mt-30 ls1 fz-12 text-u" style="display: flex; justify-content: end;">اقرأ المزيد<svg
                                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="serv-item lg-pad md-mb50 radius-5 wow fadeIn" data-wow-delay=".8s">
                                        <div class="icon-img-50 mb-40">
                                            <img src="assets/imgs/serv-icons/1.webp" alt="">
                                        </div>
                                        <span class="mb-10 opacity-7">خدمات مخصصة</span>
                                        <h6 class="mb-15">صناعة الهوية البصرية</h6>
                                        <p class="fz-14" style="text-align: justify">للعلامات التجارية والتصميم الذي يترك انطباعًا دائمًا ويتقاطع مع جوهر هويتك.</p>
                                        <div class="crv-more">
                                            <a href="#" class="mt-30 ls1 fz-12 text-u" style="display: flex; justify-content: end;">اقرأ المزيد<svg
                                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="serv-item lg-pad radius-5 wow fadeIn" data-wow-delay="1.2s">
                                        <div class="icon-img-50 mb-40">
                                            <img src="assets/imgs/serv-icons/2.webp" alt="">
                                        </div>
                                        <span class="mb-10 opacity-7">تطوير المنتج</span>
                                        <h6 class="mb-15">صناعة المحتوى الإبداعي</h6>
                                        <p class="fz-14" style="text-align: justify">خبرتنا تجعلنا نبتكر تجارب محتوى فريدة باستخدام أحدث التقنيات، مما يخلق ذكريات دائمة للجمهور</p>
                                        <div class="crv-more">
                                            <a href="#" class="mt-30 ls1 fz-12 text-u" style="display: flex; justify-content: end;">اقرأ المزيد<svg
                                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>
                    <div class="bg-pattern bg-img" data-background="assets/imgs/patterns/bg-lines-1.svg" style="z-index:-100;background-image: url(&quot;assets/imgs/patterns/bg-lines-1.svg&quot;);"></div>

                </section>






                <section class="works thecontainer ">
                    <div class="panel mt-30" >
                        <div class="item">
                            <div class="img" style="text-align: center">
                                <img  src="{{ asset('assets\imgs\index\services\graphic design.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end " >
                                <div>
                                    <span>نقوم بتصميم هويتك التجارية باحترافية
                                        لتعكس رؤيتك وطموح عملك</span>
                                    <h5>صناعة الهوية البصرية
                                    </h5>

                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item" >
                            <div class="img">
                                <img  src="{{ asset('assets\imgs\index\services\social media_.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-center ">
                                <div>
                                    <span>التعامل مع حسابات التواصل الاجتماعي
                                        وإدارة محتواها بالطريقة المناسبة</span>
                                    <h5>إدارة حسابات التواصل الاجتماعي</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item" >
                            <div class="img">
                                <img  src="{{ asset('assets\imgs\index\services\website.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>نقــــوم بتصـميم المــــواقع التي تتناســـب
                                        مع احتياجك ليصبح التعرف عليك أسهل</span>
                                    <h5>تصميم المواقع الالكترونية</h5>

                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item" >
                            <div class="img">
                                <img  src="{{ asset('assets\imgs\index\services\digital marketing.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>عندمـا يصبــح هدفــك الوصـــول إلى
                                        عملائــك الحقيقيـيـن، يكــون فريقنــا
                                        خيــارك الأول لهدفــك</span>
                                    <h5>التسويق الإلكتروني</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item" >
                            <div class="img">
                                <img  src="{{ asset('assets\imgs\index\services\content creation.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>نحن نبتكر ونبني المحتوى الإبداعي بمهارة فائقة، جاعلين منّا الشريك المثالي لكم في هذا المجال</span>
                                    <h5>صناعة المحتوى الإبداعي</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="bg-pattern bg-img" data-background="assets/imgs/patterns/bg-lines-1.svg" style="z-index: -100;background-image: url(&quot;assets/imgs/patterns/bg-lines-1.svg&quot;);"></div>

                </section>


                <section class="blog-modern section-padding contact-crev rtl">
                    <div class="container">
                        <div class="row" style="justify-content: center;display: flex;">
                            <div class="sec-lg-head mb-80 wow fadeIn " style="text-align: center;">
                                <h6 class="dot-titl colorbg-3 ">خدمات كراء الاستوديو</h6>
                            </div>
                            <div class="col-lg-4 col-md-6">

                                <div class="item mb-50">
                                    <div class="img">
                                        <a href="{{ route('ar-productPhotographe') }}">
                                        <img src="assets/imgs/blog/h1.jpg" alt="">
                                        </a>
                                        <div class="date">
                                            <a href="{{ route('ar-productPhotographe') }}">يوم كامل</a>
                                        </div>
                                    </div>
                                    <div class="cont mt-30">
                                        <h6>
                                            <a href="{{ route('ar-productPhotographe') }}">استئجار استوديو لجلسة تصوير استثنائية</a>
                                        </h6>
                                        <a href="{{ route('ar-productPhotographe') }}" class="mt-20 ls1 sub-title">500.00 DH<i class="ml-5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="item mb-50">
                                    <div class="img">
                                        <a href="{{ route('ar-productVideo') }}">
                                        <img src="assets/imgs/blog/h2.jpg" alt="">
                                        </a>
                                        <div class="date">
                                            <a href="{{ route('ar-productVideo') }}">يوم كامل</a>
                                        </div>
                                    </div>
                                    <div class="cont mt-30">
                                        <h6>
                                            <a href="{{ route('ar-productVideo') }}">استئجار استوديو لجلسة تصوير فيديو فريدة</a>
                                        </h6>
                                        <a href="{{ route('ar-productVideo') }}" class="mt-20 ls1 sub-title">1,200.00 DH                                            <i class="ml-5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                            </svg></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="intro-feat ">
                            <div class="container pb-0 ">
                                <div class="row justify-content-around">
                                    <div class="col-lg-6">
                                        <div class="cont md-mb50">

                                            <h3 class="mb-30">استمتع بجولة خاصة بك في موقعنا الرئيسي! </h3>
                                            <div class="row justify-content-center">
                                                <div class="col-md-10">
                                                    <div class="text">
                                                        <p>تعرف على موقعنا المميز من خلال الفيديو و تعرف على مكان بداية وجودك ونجاحك على الانترنيت </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1 valign">
                                        <div class="bg-img full-width d-flex align-items-center justify-content-center" data-background="assets/imgs/background/13.jpg" style="background-image: url(&quot;assets/imgs/background/13.jpg&quot;);">
                                            <div>
                                                <div class="play-button">
                                                    <a href="https://www.youtube.com/watch?v=yAs3XtB7jvQ" class="btn vid">
                                                        <div class="butn-ply">
                                                            <svg width="80px" height="80px" viewBox="0 0 80 80" preserveAspectRatio="none">
                                                                <circle class="circle" cx="40" cy="40" r="38" stroke="#c9f31d" stroke-width="2" fill="none"></circle>
                                                            </svg>
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </section>

                <section class=" intro-corp block-img  section-padding rtl  intro-img-parlx " >
                    <div class="container">
                        <div class="row lg-marg">
                            <div class="shap2 opacity-4">
                                <img src="assets/imgs/sass-img/shap2.png" alt=""  style="width:200px">
                            </div>
                            <div class="col-lg-6 md-mb50">
                                <div class="imgs mb-80">
                                    <div class="img1 main-color3 wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                        <img src="{{ asset('assets/imgs/index/company/Artboard.webp') }}" alt="">
                                    </div>
                                    <div class="img2 wow fadeInLeft" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                        <img src="{{ asset('assets/imgs/index/company/Artboard1.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 valign">
                                <div class="cont">
                                    <div class="sec-lg-head mb-80 wow fadeIn">
                                        <h6 class="dot-titl colorbg-3 mb-10">عن الشركة</h6>
                                    </div>
                                    <h3 class="mb-15">شاهد عملية الإبداع وراء <span class="stroke fw-700 opacity-7">التسويق الرقمي</span> لدينا.</h3>
                                    <p>نقوم بإنتاج أعمال رقمية متميزة للويب والتجارب مع وكالات إبداعية وعلامات تجارية عالمية على حد سواء - وذلك بشغف.</p>
                                    <div class="mt-50 pt-30 bord-thin-top">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="rest list-arrow">
                                                    <li class="mt-20">
                                                        <span class="icon">
                                                            <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                            </svg>
                                                        </span>
                                                        <span>استراتيجية التسويق</span>
                                                    </li>
                                                    <li class="mt-20">
                                                        <span class="icon">
                                                            <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                            </svg>
                                                        </span>
                                                        <span>إعادة العلامة التجارية</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="rest list-arrow">
                                                    <li class="mt-20">
                                                        <span class="icon">
                                                            <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                            </svg>
                                                        </span>
                                                        <span>إنتاج فريد</span>
                                                    </li>
                                                    <li class="mt-20">
                                                        <span class="icon">
                                                            <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                            </svg>
                                                        </span>
                                                        <span>هوية الشركة</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('about-ar') }}" class="butn butn-md butn-bord radius-30 mt-50">
                                        <span>استكشاف المزيد</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

           {{--      <section class="pricing section-padding sub-bg rtl">
                    <div class="container">
                        <div class="sec-lg-head mb-80">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="position-re">
                                        <h6 class="dot-titl colorbg-3 mb-10">الباقة الأساسية</h6>
                                        <h2 class="fz-60 fw-700">أسعارنا</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center">
                                    <div class="text">
                                        <p>نتطلع أن نخوض سوياً تحديات تنقلنا لمستوى إبداعي مختلف يحقق نتائج ملموسة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row md-marg ">
                            <div class="col-lg-4">
                                <div class="item main-bg position-re o-hidden md-mb50">
                                    <div class="info-box pb-30 bord-thin-bottom mb-30">
                                        <h6 class="sub-title mb-15">الخطة الأساسية</h6>
                                        <div class="amount">
                                            <div><span class="main-color3 num-font fw-600 fz-50">Dh1900</span> <span class="fz-14 fw-400">/ ابتداء</span></div>
                                        </div>
                                        <p class="fz-13">سيتم تخفيض 10٪ ضريبة بعد تحديد السعر.</p>
                                    </div>
                                    <ul class="rest ">
                                   <li>إنشاء فيديو أساسي</li>
                                   <li>إنشاء موقع ويب أساسي</li>
                                   <li>استشارة أساسية في التسويق الرقمي</li>
                                   <li>جدول محتوى شهري لوسائل التواصل الاجتماعي</li>
                                    </ul>
                                    <a href="{{ route('contact-ar') }}" class="butn butn-md butn-bord mt-30">
                                        <span>ابدأ الآن</span>
                                        <i class="ml-5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                            </svg></i>
                                    </a>
                                    <div class="bg-pattern bg-img opacity-1" data-background="assets/imgs/patterns/1.svg" style="background-image: url(&quot;assets/imgs/patterns/1.svg&quot;);"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item main-bg position-re o-hidden md-mb50">
                                    <div class="info-box pb-30 bord-thin-bottom mb-30">
                                        <h6 class="sub-title mb-15">الباقة الممتازة</h6>
                                        <div class="amount">
                                            <div><span class="main-color3 num-font fw-600 fz-50">Dh4900</span> <span class="fz-14 fw-400">/ ابتداء</span></div>
                                        </div>
                                        <p class="fz-13">سيتم تضمين 10٪ ضريبة بعد تحديد السعر.</p>
                                    </div>
                                    <ul class="rest">
                                        <li>إنشاء فيديو متميز</li>
                                        <li>إنشاء موقع ويب مخصص مع إمكانيات التجارة الإلكترونية</li>
                                        <li>تنفيذ حملة تسويق رقمي بكاملها</li>
                                        <li>إدارة وسائل التواصل الاجتماعي</li>
                                        <li>حزمة العلامة التجارية الكاملة</li>
                                        <li>تقارير شهرية حول التحليلات والأداء</li>
                                    </ul>
                                    <a href="{{ route('contact-ar') }}" class="butn butn-md butn-bg main-colorbg3 text-dark mt-30">
                                        <span>ابدأ الآن</span>
                                        <i class="ml-5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                            </svg></i>
                                    </a>
                                    <div class="bg-pattern bg-img opacity-3" data-background="assets/imgs/patterns/abstact-BG.webp" style="background-image: url(&quot;assets/imgs/patterns/abstact-BG.webp&quot;);"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="item main-bg position-re o-hidden md-mb50">
                                    <div class="info-box pb-30 bord-thin-bottom mb-30">
                                        <h6 class="sub-title mb-15">الباقة القياسية</h6>
                                        <div class="amount">
                                            <div><span class="main-color3 num-font fw-600 fz-50">Dh2900</span> <span class="fz-14 fw-400">/ ابتداء</span></div>
                                        </div>
                                        <p class="fz-13">سيتم تضمين 10٪ ضريبة بعد تحديد السعر.</p>
                                    </div>
                                    <ul class="rest">
                                        <li>إنشاء فيديو محسن</li>
                                        <li>إنشاء موقع ويب متقدم</li>
                                        <li>استراتيجية تسويق رقمي شاملة</li>
                                        <li>إدارة وسائل التواصل الاجتماعي</li>
                                        <li>حزمة العلامة التجارية الأساسية</li>
                                    </ul>
                                    <a href="{{ route('contact-ar') }}" class="butn butn-md butn-bord mt-30">
                                        <span>ابدأ الآن</span>
                                        <i class="ml-5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                            </svg></i>
                                    </a>
                                    <div class="bg-pattern bg-img opacity-1" data-background="assets/imgs/patterns/1.svg" style="background-image: url(&quot;assets/imgs/patterns/1.svg&quot;);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            </main>

            <footer class="sub-bg rtl">
                <div class="footer-container">
                    <div class="container pb-80 pt-80 ontop">
                        <div class="call-box text-center mb-80">
                            <h2>
                                <a href="{{ route('contact-ar') }}">لنتحدث <span class="stroke">في مشروعك</span></a>
                                <span class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h2>
                        </div>
                        @include('arabic.layout.footer')
                    </div>
                    @include('arabic.layout.credit')
                </div>
            </footer>

        </div>
    </div>







    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.4.0.min.js') }}" ></script>

    <!-- plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}" ></script>

    <script src="{{ asset('assets/js/gsap.min.js') }}" ></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}" ></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}" ></script>
    <script src="{{ asset('assets/js/hscroll.js') }}" ></script>
    <script src="{{ asset('assets/js/smoother-script.js') }}" ></script>
    <script src="{{ asset('assets/js/customeArJs.js') }}" ></script>
    <!-- custom scripts -->
    <script src="{{ asset('assets/js/scripts.js') }}" ></script>
    <script src="{{ asset('assets/js/customeAr.js') }}" ></script>

</body>


</html>
