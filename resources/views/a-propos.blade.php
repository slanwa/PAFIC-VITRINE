@extends('layouts.app')

@section('title', 'À propos - PAFIC SARL')

@section('content')


<section class="page-hero">

    <div class="container">

        <span class="eyebrow">
            QUI SOMMES-NOUS ?
        </span>

        <h1>
            PAFIC SARL
        </h1>

        <p>
            Partenaire Financier avec Christ : une industrie citoyenne camerounaise au service du bien-être de tous.
        </p>

    </div>

</section>



<section class="about-section">

    <div class="container about-grid">

        <div class="about-content">

            <span class="eyebrow">
                NOTRE HISTOIRE
            </span>

            <h2>
                Depuis 2014, nous produisons l'excellence agro-alimentaire au Cameroun
            </h2>

            <p>
                Créée en 2013 par <strong>M. TCHOFFO Bertin</strong> et inaugurée le 14 janvier 2016 par le Gouverneur de la région du Centre, PAFIC SARL est une Société à Responsabilité Limitée (SARL) dotée d'une personnalité morale de droit camerounais à autonomie financière et de gestion.
            </p>

            <p>
                L'entreprise démarre ses activités le 24 novembre 2014 avec un capital initial de 1.005.000.000 FCFA. Elle est spécialisée dans la fabrication et la commercialisation de savons de ménage, savons de toilette et laits de toilettes. En 2019, elle élargit son offre avec la production de films plastiques et, en 2020, consacre cette ligne à ses besoins internes.
            </p>

            <p>
                Aujourd'hui, PAFIC SARL est une référence dans le secteur agro-alimentaire avec des unités de production intégrées : savonnerie, raffinerie d'huile, unité de boissons, presserie et cosmétique.
            </p>

        </div>


        <div class="about-image">

            <img src="{{ asset('images/pafic-office.jpg') }}"
                 alt="Bureaux de PAFIC SARL">

        </div>

    </div>

</section>



<section class="values-section">

    <div class="container">

        <div class="section-heading centered">

            <span class="eyebrow">
                NOS OBJECTIFS
            </span>

            <h2>
                Ce qui nous anime au quotidien
            </h2>

        </div>


        <div class="values-grid">

            <div class="value-card">

                <span>01</span>

                <h3>
                    Réduire l'inégalité offre/demande
                </h3>

                <p>
                    Nous contribuons à équilibrer le marché régional en savons et huiles comestibles.
                </p>

            </div>


            <div class="value-card">

                <span>02</span>

                <h3>
                    Limiter les importations
                </h3>

                <p>
                    Nous produisons localement des produits de première nécessité pour réduire la dépendance extérieure.
                </p>

            </div>


            <div class="value-card">

                <span>03</span>

                <h3>
                    Accessibilité financière
                </h3>

                <p>
                    Nos produits sont disponibles en différents grammages pour être accessibles à toutes les bourses.
                </p>

            </div>


            <div class="value-card">

                <span>04</span>

                <h3>
                    Rayonnement sous-régional
                </h3>

                <p>
                    Avec 80% de notre production exportée vers le Tchad, la RCA et d'autres pays, nous portons haut le "Made in Cameroun".
                </p>

            </div>

        </div>

    </div>

</section>



<!-- SECTION CHIFFRES CLÉS (ajoutée) -->

<section class="stats-section">

    <div class="container">

        <div class="section-heading centered">

            <span class="eyebrow">
                PAFIC EN CHIFFRES
            </span>

            <h2>
                Une entreprise qui grandit
            </h2>

        </div>

        <div class="stats">

            <div class="stat">
                <strong>2013</strong>
                <span>Année de création</span>
            </div>

            <div class="stat">
                <strong>1,5 Mds FCFA</strong>
                <span>Capital social actuel</span>
            </div>

            <div class="stat">
                <strong>80%</strong>
                <span>Exportation vers la sous-région</span>
            </div>

            <div class="stat">
                <strong>6</strong>
                <span>Unités de production</span>
            </div>

        </div>

    </div>

</section>

@endsection