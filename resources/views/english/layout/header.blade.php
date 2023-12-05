<nav class="navbar nav-crev navbar-expand-lg change rtl" style="position: fixed;">
    <div class="container">

        <!-- Logo1 -->
        <a class="logo icon-img-100 logoEasy" href="{{ route('index-en') }}">
            <img style="width: 200px;" src="assets/imgs/logo/white/easyenoLogoBanner.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index-en') }}"><span>Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-en') }}"><span>About Us</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span>Our Services</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Brand Identity Design</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Website and App Development</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Digital Marketing</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Creative Content Production</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Social Media Management</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-en') }}"><span>Contact Us</span></a>
                </li>

                <li class="nav-item lang languageMenuNone">
                    <div class="nav-link">
                        Languages
                        <a href="{{ route('index-fr') }}"><x-flag-country-fr width="32" height="32"/></a>
                        <a href="{{ route('index-en') }}"><x-flag-country-gb width="32" height="32" /></a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="search-form" style="color: white">
            <a href="{{ route('index-fr') }}"><x-flag-country-fr width="32" height="32"/></a>
            <a href="{{ route('index-ar') }}"><x-flag-country-sa width="32" height="32" /></a>
        </div>
    </div>
</nav>
