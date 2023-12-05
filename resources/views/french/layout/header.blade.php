<nav class="navbar nav-crev navbar-expand-lg change" style="position: fixed;">
    <div class="container">

        <!-- Logo1 -->
        <a class="logo icon-img-100 logoEasy" href="{{ route('index-fr') }}">
            <img style="width: 200px;" src="assets/imgs/logo/white/easyenoLogoBanner.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index-fr') }}"><span >Accueil</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-fr') }}"><span >Sur-nous ?</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span >Nos Services</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Conception d'identité de marque</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Développement de sites Web et d'applications</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Marketing numérique</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Création de contenu créatif</a>
                        <a class="dropdown-item" href="{{ route('viewPDF')}}" target="_blank">Gestion des médias sociaux</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-fr') }}"><span >Contactez-nous</span></a>
                </li>

                <li class="nav-item lang languageMenuNone">
                    <div class="nav-link">
                        Langues
                        <a href="{{ route('index-ar') }}"><x-flag-country-sa width="32" height="32" /></a>
                        <a href="{{ route('index-en') }}"><x-flag-country-gb width="32" height="32" /></a>
                    </div>
                </li>
            </ul>
        </div>


        <div class="search-form" style="color: white">
            <a href="{{ route('index-en') }}"><x-flag-country-gb width="32" height="32" /></a>
            <a href="{{ route('index-ar') }}"><x-flag-country-sa width="32" height="32" /></a>
        </div>
    </div>
</nav>
