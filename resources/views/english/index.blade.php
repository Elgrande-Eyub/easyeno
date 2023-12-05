<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Title  -->
    <title>EASYENO Media | Innovative Marketing Solutions</title>
    <meta name="description" content="EASYENO Media is a leading marketing agency offering creative and effective solutions. Explore our services in digital marketing, search engine optimization, and social media. Shape your online presence with EASYENO Media.">
    @include('english.layout.head')

</head>

<body class="home-main-crev main-bg ">



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

            <main class="main-bg" >

                <!-- ==================== Start Slider ==================== -->
                <header class="header-startup  full-height valign bg-img parallaxie container1" data-background="#" data-overlay-dark="7" style="background-image: url(&quot;assets/imgs/background/14.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 0px; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                    <video autoplay loop muted plays-inline class="background-clip">
                        <source src="{{ asset('backgorund-Video.mp4') }}" type="video/mp4">
                    </video>
                    <div class="container ontop" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="caption text-center mt-50">
                                    <div class="sec-lg-head">
                                        <h6 class="dot-titl colorbg-3 mb-10">Marketing Agency</h6>
                                    </div>
                                    <h1 class="fw-700 fz-80">
                                        <h1 class="fw-700 fz-80">We're<img  style="width:10%;" src="{{ asset('assets/imgs/logo/white/esaynoLogo.png') }}" alt="Easyeno Media Logo">sharp brand
                                        <h4 style="margin-top: 1rem">Your Gateway to Exceptional Marketing Strategies</h4>
                                        <h6 class="stroke">With EASYENO MEDIA</h6>
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
                    <div class="bg-pattern-half bg-img opacity-5" data-background="{{ asset('assets/imgs/svg-assets/patern-bg.png') }}" style="background-image: url(&quot;assets/imgs/svg-assets/patern-bg.png&quot;);"></div>
                </header>


                <section class="about-intro section-padding contact-crev">
                    <section style="padding-bottom: 4rem">
                        <div class="container">
                            <div class="row mb-80 ">
                                <div class="col-lg-5">
                                    <div class="sec-lg-head md-mb30">
                                        <h6 class="dot-titl colorbg-3 mb-10">Why Choose Us</h6>
                                        <h2 class="d-rotate wow">
                                            <span class="rotate-text">Get to Know Us Closely</span>

                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-2 valign">
                                    <div class="text">
                                        <p class="d-slideup wow">
                                            <span class="sideup-text">
                                                <span class="up-text">Choosing us saves you the hassle of searching for marketing ideas and methods to showcase products and how to target the target audience</span>
                                            </span>
                                        </p>
                                        <div class="vew-all mt-50 ml-30 wow fadeIn" data-wow-delay=".8s">
                                            <a href="{{ ('about-en') }}">See our entire team
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
                                <div class="col-lg-5 valign rest " >
                                    <div class="cont" style="margin-right: 1rem">
                                        <div class="feat " style="padding:0.5rem">
                                            <div class="item-flex d-flex align-items-center mb-50 wow fadeIn" data-wow-delay=".4s">
                                                <div>
                                                    <div class="icon-img-50">
                                                        <img src="{{ asset('assets/imgs/serv-icons/0.webp') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="cont mr-30">
                                                    <h6> Creativity
                                                    </h6>
                                                    <p class="fz-15">Because creativity originates from an idea... We draw inspiration from our local environment and execute it on a global scale.</p>
                                                </div>
                                            </div>
                                            <div class="item-flex d-flex align-items-center mb-50 wow fadeIn" data-wow-delay=".4s">
                                                <div>
                                                    <div class="icon-img-50">
                                                        <img src="{{ asset('assets/imgs/serv-icons/1.webp') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="cont mr-30">
                                                    <h6>Excellence</h6>
                                                    <p class="fz-15">Our distinction that we aspire to in our projects and creative operations.</p>
                                                </div>
                                            </div>
                                            <div class="item-flex d-flex align-items-center wow fadeIn" data-wow-delay=".8s" >
                                                <div>
                                                    <div class="icon-img-50">
                                                        <img src="{{ asset('assets/imgs/serv-icons/2.webp') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="cont mr-30">
                                                    <h6>Development</h6>
                                                    <p class="fz-15">We evolve to develop and continue our developmental process to elevate our clients.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 rest videoPres radius-20" style="display:flex;">
                                    <video class="radius-20" style="width:100%;border-radius:20px" autoplay loop muted plays-inline >
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
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Brand Identity and Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Website and App Development</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Digital Marketing</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Advertising Campaigns</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Marketing Video Clips</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Social Media Management</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="box non-strok">
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Brand Identity and Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Website and App Development</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Digital Marketing</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Advertising Campaigns</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Marketing Video Clips</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center">
                                                        <span>Social Media Management</span>
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

                    <section class="serv-box section-padding pb-0">
                        <div class="container process">
                            <div class="sec-lg-head mb-80">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="position-re">
                                            <h6 class="dot-titl colorbg-3 mb-10">Featured Services</h6>
                                            <h2 class="d-rotate wow">
                                                <span class="rotate-text">EASYENO Services</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-flex align-items-center">
                                        <div class="text wow fadeIn">
                                            <p>Your project journey begins here, where experience becomes a game-changer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="serv-item lg-pad md-mb50 radius-5 wow fadeIn" data-wow-delay=".5s">
                                        <div class="icon-img-50 mb-40">
                                            <img src="assets/imgs/serv-icons/0.webp" alt="">
                                        </div>
                                        <span class="mb-10 opacity-7">Product Design</span>
                                        <h6 class="mb-15">Digital Marketing</h6>
                                        <p class="fz-14">Digital marketing to increase your online presence and reach a global audience.</p>
                                        <div class="crv-more">
                                            <a href="#" class="mt-30 ls1 fz-12 text-u" >Read More<svg
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
                                        <span class="mb-10 opacity-7">Custom Services</span>
                                        <h6 class="mb-15">Visual Identity Crafting</h6>
                                        <p class="fz-14" style="text-align: justify">For brands and design that leaves a lasting impression and aligns with the essence of your identity.</p>
                                        <div class="crv-more">
                                            <a href="#" class="mt-30 ls1 fz-12 text-u" >Read More<svg
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
                                        <span class="mb-10 opacity-7">Product Development</span>
                                        <h6 class="mb-15">Creative Content Crafting</h6>
                                        <p class="fz-14" style="text-align: justify">Our experience enables us to innovate unique content experiences using the latest technologies, creating lasting memories for the audience.</p>
                                        <div class="crv-more">
                                            <a href="#" class="mt-30 ls1 fz-12 text-u" >Read More<svg
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






                <section class="works thecontainer">
                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img" style="text-align: center">
                                <img src="{{ asset('assets\imgs\index\services\graphic design.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>We professionally design your brand identity to reflect your vision and business ambitions.</span>
                                    <h5>Visual Identity Crafting</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('assets\imgs\index\services\social media_.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-center">
                                <div>
                                    <span>Manage social media accounts and their content appropriately.</span>
                                    <h5>Social Media Account Management</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('assets\imgs\index\services\website.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>We design websites that suit your needs, making it easier for others to recognize you.</span>
                                    <h5>Website Design</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('assets\imgs\index\services\digital marketing.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>When your goal is to reach your real customers, our team is your first choice.</span>
                                    <h5>Digital Marketing</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('assets\imgs\index\services\content creation.png') }}" alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>We innovate and build creative content with exceptional skill, making us the ideal partner for you in this field.</span>
                                    <h5>Creative Content Crafting</h5>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="bg-pattern bg-img" data-background="assets/imgs/patterns/bg-lines-1.svg"
                        style="z-index: -100; background-image: url('assets/imgs/patterns/bg-lines-1.svg');"></div>
                </section>



                <section class="blog-modern section-padding contact-crev">
                    <div class="container">
                        <div class="row" style="justify-content: center; display: flex;">
                            <div class="sec-lg-head mb-80 wow fadeIn" style="text-align: center;">
                                <h6 class="dot-titl colorbg-3">Studio Rental Services</h6>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="item mb-50">
                                    <div class="img">
                                        <a href="{{ route('en-productPhotographe') }}">
                                            <img src="assets/imgs/blog/h1.jpg" alt="">
                                        </a>
                                        <div class="date">
                                            <a href="{{ route('en-productPhotographe') }}">Full Day</a>
                                        </div>
                                    </div>
                                    <div class="cont mt-30">
                                        <h6>
                                            <a href="{{ route('en-productPhotographe') }}">Rent a studio for an exceptional photo session</a>
                                        </h6>
                                        <a href="{{ route('en-productPhotographe') }}" class="mt-20 ls1 sub-title">500.00 DH
                                            <i class="ml-5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="item mb-50">
                                    <div class="img">
                                        <a href="{{ route('en-productVideo') }}">
                                            <img src="assets/imgs/blog/h2.jpg" alt="">
                                        </a>
                                        <div class="date">
                                            <a href="{{ route('en-productVideo') }}">Full Day</a>
                                        </div>
                                    </div>
                                    <div class="cont mt-30">
                                        <h6>
                                            <a href="{{ route('en-productVideo') }}">Rent a studio for a unique video shooting session</a>
                                        </h6>
                                        <a href="{{ route('en-productVideo') }}" class="mt-20 ls1 sub-title">1,200.00 DH
                                            <i class="ml-5"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                </svg></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="intro-feat">
                            <div class="container pb-0">
                                <div class="row justify-content-around">
                                    <div class="col-lg-6">
                                        <div class="cont md-mb50">

                                            <h3 class="mb-30">Enjoy your private tour on our main site!</h3>
                                            <div class="row justify-content-center">
                                                <div class="col-md-10">
                                                    <div class="text">
                                                        <p>Discover our unique location through the video and learn about the starting point of your presence and success on the internet.</p>
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

                <section class="intro-corp block-img section-padding intro-img-parlx">
                    <div class="container">
                        <div class="row lg-marg">
                            <div class="shap2 opacity-4">
                                <img src="assets/imgs/sass-img/shap2.png" alt="" style="width: 200px">
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
                                        <h6 class="dot-titl colorbg-3 mb-10">About the Company</h6>
                                    </div>
                                    <h3 class="mb-15">Witness the creative process behind our <span class="stroke fw-700 opacity-7">digital marketing</span>.</h3>
                                    <p>We produce distinctive digital works for the web and experiences with both creative agencies and global brands alike - with passion.</p>
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
                                                        <span>Marketing Strategy</span>
                                                    </li>
                                                    <li class="mt-20">
                                                        <span class="icon">
                                                            <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                            </svg>
                                                        </span>
                                                        <span>Brand Redesign</span>
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
                                                        <span>Unique Production</span>
                                                    </li>
                                                    <li class="mt-20">
                                                        <span class="icon">
                                                            <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z" fill="#fff"></path>
                                                            </svg>
                                                        </span>
                                                        <span>Company Identity</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('about-en') }}" class="butn butn-md butn-bord radius-30 mt-50">
                                        <span>Explore More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


           {{--      <section class="pricing section-padding sub-bg ">
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
                                    <a href="{{ route('contact-en') }}" class="butn butn-md butn-bord mt-30">
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
                                    <a href="{{ route('contact-en') }}" class="butn butn-md butn-bg main-colorbg3 text-dark mt-30">
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
                                    <a href="{{ route('contact-en') }}" class="butn butn-md butn-bord mt-30">
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

            <footer class="sub-bg">
                <div class="footer-container">
                    <div class="container pb-80 pt-80 ontop">
                        <div class="call-box text-center mb-80">
                            <h2>
                                <a href="{{ route('contact-en') }}">Let's discuss <span class="stroke">your project</span></a>
                                <span class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h2>
                        </div>
                        @include('english.layout.footer')
                    </div>
                    @include('english.layout.credit')
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
