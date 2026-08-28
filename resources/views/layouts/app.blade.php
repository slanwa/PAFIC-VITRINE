<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PAFIC SARL')</title>

    <meta name="description"
          content="@yield('description', 'PAFIC SARL - Agro-industrie camerounaise au service du bien-être de tous.')">

    <link rel="stylesheet" href="{{ asset('css/pafic.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
</head>

<body>

<header class="navbar">

    <div class="container nav-container">

        <a href="{{ route('accueil') }}" class="logo">

            <!-- LOGO PAFIC AJOUTÉ -->
            <img src="{{ asset('images/pafic-logo.jpg') }}"
                 alt="Logo PAFIC SARL"
                 class="logo-image">

            <div class="logo-text">
                <strong>PAFIC</strong>
                <span>SARL</span>
            </div>

        </a>

        <nav class="navigation">

            <a href="{{ route('accueil') }}"
               class="{{ request()->routeIs('accueil') ? 'active' : '' }}">
                Accueil
            </a>

            <a href="{{ route('a-propos') }}"
               class="{{ request()->routeIs('a-propos') ? 'active' : '' }}">
                À propos
            </a>

            <a href="{{ route('services') }}"
               class="{{ request()->routeIs('services') ? 'active' : '' }}">
                Nos produits
            </a>



            <a href="#">
                Actualités
            </a>

            <a href="#">
                Contact
            </a>

        </nav>

        <a href="#" class="nav-button">
            Nous contacter
        </a>

    </div>

</header>


<main>

    @yield('content')

</main>


<footer class="footer">

    <div class="container footer-grid">

        <div>

            <div class="logo footer-logo">

                <!-- LOGO PAFIC AJOUTÉ DANS LE FOOTER -->
                <img src="{{ asset('images/pafic-logo.jpg') }}"
                     alt="Logo PAFIC SARL"
                     class="logo-image footer-logo-image">

                <div class="logo-text">
                    <strong>PAFIC</strong>
                    <span>SARL</span>
                </div>

            </div>

            <p class="footer-description">
                PAFIC SARL est une industrie citoyenne camerounaise spécialisée dans la production de savons, huiles raffinées, eau minérale et cosmétiques. Qualité et engagement pour le bien-être de tous.
            </p>

        </div>


        <div>
            <h4>Navigation</h4>

            <a href="{{ route('accueil') }}">Accueil</a>
            <a href="{{ route('a-propos') }}">À propos</a>
            <a href="{{ route('services') }}">Nos produits</a>
        </div>


        <div>
            <h4>Entreprise</h4>

            <a href="#">Nos projets</a>
            <a href="#">Actualités</a>
            <a href="#">Contact</a>
        </div>


        <div>
            <h4>Contact</h4>

            <p>Okola, Leboudi - Cameroun</p>
            <p>(+237) 222 22 15 14</p>
            <p>Pafic.sarl@yahoo.fr</p>
        </div>

    </div>


    <div class="footer-bottom">

        <div class="container">

            <p>
                © {{ date('Y') }} PAFIC SARL. Tous droits réservés.
            </p>

        </div>

    </div>

</footer>

</body>
</html>