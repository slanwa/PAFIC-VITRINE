@extends('layouts.app')

@section('title', 'PAFIC SARL - Agro-industrie camerounaise')

@section('description', 'PAFIC SARL, leader camerounais dans la production de savons, huiles, eau minérale et cosmétiques. Qualité et engagement pour le bien-être de tous.')

@section('content')


<!-- HERO -->

<section class="hero">

    <div class="container hero-container">

        <div class="hero-content">

            <span class="eyebrow">
                PAFIC SARL
            </span>

            <h1>
                L'excellence agro-industrielle
                <br>
                au service du Cameroun
            </h1>

            <p>
                PAFIC SARL est une entreprise citoyenne camerounaise spécialisée dans la production de savons, huiles raffinées, eau minérale et cosmétiques. Depuis 2014, nous innovons pour offrir des produits de qualité, accessibles à tous.
            </p>

            <div class="hero-buttons">

                <a href="{{ route('services') }}" class="button primary">
                    Découvrir nos produits
                    <span>→</span>
                </a>

                <a href="#" class="button secondary">
                    Nous contacter
                    <span>→</span>
                </a>

            </div>


            <div class="hero-features">

                <div class="feature">

                    <div class="feature-icon">
                        ✓
                    </div>

                    <div>
                        <strong>Agro-alimentaire</strong>
                        <p>
                            Huile PAFIC'OR, eau PAFIC, jus OZAN
                        </p>
                    </div>

                </div>


                <div class="feature">

                    <div class="feature-icon">
                        ★
                    </div>

                    <div>
                        <strong>Savonnerie & Cosmétique</strong>
                        <p>
                            Savons ménagers, DERMA, laits de toilette
                        </p>
                    </div>

                </div>


                <div class="feature">

                    <div class="feature-icon">
                        ♢
                    </div>

                    <div>
                        <strong>Engagement local</strong>
                        <p>
                            Made in Cameroun, rayonnement sous-régional
                        </p>
                    </div>

                </div>

            </div>

        </div>


        <div class="hero-image">

            <img src="{{ asset('images/pafic-building.jpg') }}"
                 alt="Bâtiment PAFIC SARL">

        </div>

    </div>

</section>



<!-- INTRODUCTION -->

<section class="intro-section">

    <div class="container">

        <div class="section-heading">

            <span class="eyebrow">
                NOTRE SAVOIR-FAIRE
            </span>

            <h2>
                De la matière première
                aux produits finis
            </h2>

            <p>
                Nous transformons les ressources locales en produits de première nécessité : savons, huiles de table, eau minérale et cosmétiques. Notre processus intègre le raffinage, la saponification et le conditionnement pour garantir qualité et accessibilité.
            </p>

        </div>


        <div class="stats">

            <div class="stat">
                <strong>10+</strong>
                <span>Années d'expérience</span>
            </div>

            <div class="stat">
                <strong>50+</strong>
                <span>Produits commercialisés</span>
            </div>

            <div class="stat">
                <strong>80%</strong>
                <span>Exportation sous-régionale</span>
            </div>

            <div class="stat">
                <strong>100%</strong>
                <span>Engagement citoyen</span>
            </div>

        </div>

    </div>

</section>



<!-- SERVICES PREVIEW -->

<section class="services-preview">

    <div class="container">

        <div class="section-heading centered">

            <span class="eyebrow">
                NOS UNITÉS DE PRODUCTION
            </span>

            <h2>
                Une expertise intégrée
                pour vos besoins quotidiens
            </h2>

            <p>
                Découvrez nos différents domaines d'activité.
            </p>

        </div>


        <div class="service-grid">

            <div class="service-card">

                <div class="service-icon">
                    ◈
                </div>

                <h3>
                    Savonnerie
                </h3>

                <p>
                    Production de savons de ménage (La Villageoise) en 400g et 200g, à partir d'huile de palme brute.
                </p>

                <a href="{{ route('services') }}">
                    En savoir plus →
                </a>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    ◇
                </div>

                <h3>
                    Raffinerie
                </h3>

                <p>
                    Huile de table PAFIC'OR (5L et 20L), obtenue par raffinage, décoloration, désodorisation et enrichissement en vitamine A.
                </p>

                <a href="{{ route('services') }}">
                    En savoir plus →
                </a>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    ⚙
                </div>

                <h3>
                    Boissons
                </h3>

                <p>
                    Eau de table PAFIC (12L, 1,65L, 0,65L) et jus de fruits naturels OZAN (oseille, ananas).
                </p>

                <a href="{{ route('services') }}">
                    En savoir plus →
                </a>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    ♡
                </div>

                <h3>
                    Cosmétique
                </h3>

                <p>
                    Savons de toilette DERMA, laits de toilette MENIAN, DERMA, CHERIFA, BEL'LA et glycérine.
                </p>

                <a href="{{ route('services') }}">
                    En savoir plus →
                </a>

            </div>

        </div>

    </div>

</section>

@endsection