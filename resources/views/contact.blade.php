@extends('layouts.app')

@section('title', 'Contact - PAFIC SARL')

@section('description', 'Contactez PAFIC SARL à Okola, Leboudi - Cameroun. Téléphone : (+237) 222 22 15 14, Email : Pafic.sarl@yahoo.fr. Nous sommes à votre écoute.')

@section('content')


<section class="page-hero">

    <div class="container">

        <span class="eyebrow">
            NOUS CONTACTER
        </span>

        <h1>
            Restons en contact
        </h1>

        <p>
            Une question, un projet, une collaboration ?
            N'hésitez pas à nous écrire ou à nous rendre visite.
        </p>

    </div>

</section>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<section class="contact-section">

    <div class="container contact-grid">

        <!-- FORMULAIRE DE CONTACT -->
        <div class="contact-form-wrapper">

            <h2>
                Envoyez-nous un message
            </h2>

            <p>
                Nous vous répondrons dans les plus brefs délais.
            </p>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">

                @csrf

                <div class="form-group">
                    <label for="name">Nom complet <span class="required">*</span></label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           placeholder="Votre nom et prénom" 
                           value="{{ old('name') }}"
                           required>
                </div>

                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           placeholder="votre@email.com" 
                           value="{{ old('email') }}"
                           required>
                </div>

                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" 
                           id="phone" 
                           name="phone" 
                           placeholder="+237 6XX XXX XXX" 
                           value="{{ old('phone') }}">
                </div>

                <div class="form-group">
                    <label for="subject">Sujet <span class="required">*</span></label>
                    <select id="subject" name="subject" required>
                        <option value="">Sélectionnez un sujet</option>
                        <option value="information" {{ old('subject') == 'information' ? 'selected' : '' }}>Demande d'information</option>
                        <option value="commande" {{ old('subject') == 'commande' ? 'selected' : '' }}>Commande de produits</option>
                        <option value="partenariat" {{ old('subject') == 'partenariat' ? 'selected' : '' }}>Proposition de partenariat</option>
                        <option value="reclamation" {{ old('subject') == 'reclamation' ? 'selected' : '' }}>Réclamation</option>
                        <option value="autre" {{ old('subject') == 'autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message <span class="required">*</span></label>
                    <textarea id="message" 
                              name="message" 
                              rows="6" 
                              placeholder="Votre message..." 
                              required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="button primary">
                    Envoyer le message
                    <span>→</span>
                </button>

            </form>

        </div>

        <!-- INFORMATIONS DE CONTACT -->
        <div class="contact-info-wrapper">

            <h2>
                Nos coordonnées
            </h2>

            <div class="contact-info-list">

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        📍
                    </div>
                    <div>
                        <strong>Adresse</strong>
                        <p>
                            PAFIC SARL<br>
                            Leboudi, Okola<br>
                            Cameroun
                        </p>
                        <p class="info-note">
                            Situé à 200 mètres de l'entrée de la carrière de LEBOUDI, en allant vers OKOLA
                        </p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        📞
                    </div>
                    <div>
                        <strong>Téléphone / Fax</strong>
                        <p>
                            <a href="tel:+237222221514">(+237) 222 22 15 14</a>
                        </p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        ✉️
                    </div>
                    <div>
                        <strong>Email</strong>
                        <p>
                            <a href="mailto:Pafic.sarl@yahoo.fr">Pafic.sarl@yahoo.fr</a><br>
                            <a href="mailto:sale@pafic-sarl.com">sale@pafic-sarl.com</a>
                        </p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        🌐
                    </div>
                    <div>
                        <strong>Site web</strong>
                        <p>
                            <a href="http://www.pafic-sarl.com" target="_blank">www.pafic-sarl.com</a>
                        </p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        🏢
                    </div>
                    <div>
                        <strong>Informations légales</strong>
                        <p>
                            <strong>Capital social :</strong> 1 546 904 798 FCFA<br>
                            <strong>RCCM :</strong> RC/YAO/2013/B/411<br>
                            <strong>N° Contribuable :</strong> MO51300048858S
                        </p>
                    </div>
                </div>

            </div>

            <!-- RÉSEAUX SOCIAUX (optionnel) -->
            <div class="social-links">
                <h4>Suivez-nous</h4>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook">📘</a>
                    <a href="#" aria-label="LinkedIn">🔗</a>
                    <a href="#" aria-label="YouTube">▶️</a>
                    <a href="#" aria-label="Instagram">📸</a>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- SECTION CARTE (optionnelle) -->
<section class="map-section">

    <div class="container">

        <div class="section-heading centered">

            <span class="eyebrow">
                NOUS TROUVER
            </span>

            <h2>
                Où sommes-nous ?
            </h2>

            <p>
                Visitez-nous dans notre usine à Leboudi, Okola.
            </p>

        </div>

        <div class="map-container">
            <!-- Intégrez ici une carte Google Maps -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6872.218903670423!2d11.447769898930998!3d3.9061915774602363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bc94cd7a1bf13%3A0x33e0bd3a0d5d089c!2sPAFIC%20SARL!5e0!3m2!1sen!2scm!4v1788447559455!5m2!1sen!2scm" 
                width="100%" 
                height="400" 
                style="border:0; border-radius: 12px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
        </div>

    </div>

</section>

@endsection