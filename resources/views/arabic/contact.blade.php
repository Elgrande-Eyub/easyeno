<!DOCTYPE html>
<html lang="zxx">


<head>
   <title>اتصل بنا - EASYENO Media</title>
   <meta name="description" content="تواصل مع إيزي إينو ميديا. اتصل بنا للاستفسارات، التعاون، أو أي أسئلة حول خدماتنا في مجال التسويق. نحن هنا لمساعدتك.">
    @include('arabic.layout.head')
</head>

<body class="main-bg ">



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



    <!-- ==================== Start Navbar ==================== -->

    @include('arabic.layout.header')

    <!-- ==================== End Navbar ==================== -->

    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding sub-bg rtl">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="caption">
                            <h6 class="sub-title">تواصل معنا</h6>
                            <h1 class="fz-55">لنجعل علامتك التجارية رائعة!</h1>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="text">
                            <p>نساعد عملائنا على تحقيق النجاح من خلال إنشاء هويات تجارية، تجارب رقمية، ومواد مطبوعة تنقل رسائل بوضوح، تحقق أهداف التسويق، وتبدو رائعة</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact-crev section-padding rtl">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-lg-head mb-80">
                            <h6 class="dot-titl-non mb-10">تواصل معنا </h6>
                            <h2 class="fz-50">طلب عرض سعر</h2>
                            <p class="fz-15 mt-10">إذا كنت ترغب في العمل معنا أو مجرد الرغبة في التواصل، سنكون سعداء بتواصلك معنا!</p>
                            <div class="phone fz-30 fw-600 mt-30 underline">
                                <a href="tel:+212664495403">066-4495403</a>
                            </div>
                            <ul class="rest social-text d-flex mt-60">
                                <li class="mr-30">
                                    <a target="_blank" href="https://www.facebook.com/easyenomedia">فايسبوك - </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/easyenomedia/"> انستاغرام</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="full-width">
                            <form id="contactUs" >
                                @csrf
                                <div class="messages"></div>

                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_name" type="text" name="client" placeholder="الاسم الكامل"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_email" type="email" name="email" placeholder="البريد الإلكتروني"
                                                >
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_phone" type="text" name="phone" placeholder="رقم الهاتف"
                                                >
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_subject" type="text" name="subject" placeholder="الموضوع">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <select  class=""  name="project" id="">
                                                <option value="website">موقع الكتروني</option>
                                                <option value="marketing">التسويق الإلكتروني</option>
                                                <option value="dashbaord">لوحة تحكم إدارة الأعمال</option>
                                                <option value="socialMediaManagement">إدارة وسائل التواصل الاجتماعي</option>
                                                <option value="other">اخر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="الرسالة" rows="4"
                                                required="required"></textarea>
                                        </div>
                                        <div class="action" style="display: flex;justify-content: start;align-items: center; gap:1rem">
                                            <div class="mt-30">
                                                <button type="submit" class="butn butn-md butn-bord radius-30">
                                                    <span class="text">ارسل رسالتك الان</span>
                                                </button>
                                            </div>
                                            <div class="mt-30">
                                                او
                                            </div>
                                            <div class="mt-30" >
                                                <a target="_blank" href="https://api.whatsapp.com/send?phone=212664495403" class="butn butn-md butn-bord radius-30 Whatsapp" style="cursor: pointer">
                                                    <span><i style="font-size: 1.5rem" class="fa-brands fa-whatsapp"></i></span>

                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->

    </main>

    <!-- ==================== Start Footer ==================== -->

    <footer class="sub-bg rtl">
        @include('arabic.layout.credit')
    </footer>

    <!-- ==================== End Footer ==================== -->


    <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>

        <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>

        <!-- custom scripts -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/customeAr.js') }}" ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
            $(document).ready(function() {

            });
            </script>
</body>


</html>
