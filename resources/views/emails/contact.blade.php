<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact - PAFIC SARL</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #c49a2b;
            padding-bottom: 20px;
            margin-bottom: 25px;
        }
        .header h1 {
            color: #1a3c6e;
            font-size: 24px;
            margin: 0;
        }
        .header p {
            color: #888;
            margin: 5px 0 0;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: 700;
            color: #1a3c6e;
            font-size: 14px;
            display: block;
            margin-bottom: 4px;
        }
        .field-value {
            color: #333;
            font-size: 16px;
            padding: 10px 14px;
            background: #f8f8f8;
            border-radius: 6px;
            border-left: 4px solid #c49a2b;
            margin: 0;
            word-wrap: break-word;
        }
        .message-content {
            background: #f8f8f8;
            padding: 15px 20px;
            border-radius: 6px;
            border-left: 4px solid #c49a2b;
            white-space: pre-wrap;
            line-height: 1.6;
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #888;
            font-size: 13px;
        }
        .footer a {
            color: #c49a2b;
            text-decoration: none;
        }
        .badge {
            display: inline-block;
            background: #c49a2b;
            color: #fff;
            padding: 2px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="header">
            <h1>📩 Nouveau message de contact</h1>
            <p>PAFIC SARL - Formulaire de contact</p>
        </div>

        <div class="field">
            <span class="field-label">👤 Nom complet</span>
            <p class="field-value">{{ $name }}</p>
        </div>

        <div class="field">
            <span class="field-label">📧 Email</span>
            <p class="field-value">{{ $email }}</p>
        </div>

        @if(!empty($phone))
        <div class="field">
            <span class="field-label">📞 Téléphone</span>
            <p class="field-value">{{ $phone }}</p>
        </div>
        @endif

        <div class="field">
            <span class="field-label">📋 Sujet</span>
            <p class="field-value">
                <span class="badge">
                    @switch($subject)
                        @case('information')
                            Demande d'information
                            @break
                        @case('commande')
                            Commande de produits
                            @break
                        @case('partenariat')
                            Proposition de partenariat
                            @break
                        @case('reclamation')
                            Réclamation
                            @break
                        @default
                            Autre
                    @endswitch
                </span>
            </p>
        </div>

        <div class="field">
            <span class="field-label">💬 Message</span>
            <div class="message-content">{{ $message }}</div>
        </div>

        <div class="footer">
            <p>
                Cet email a été envoyé depuis le formulaire de contact de 
                <a href="{{ url('/') }}">PAFIC SARL</a>.
            </p>
            <p>
                PAFIC SARL - Leboudi, Okola - Cameroun<br>
                📞 (+237) 222 22 15 14 | ✉️ Pafic.sarl@yahoo.fr
            </p>
        </div>

    </div>

</body>
</html>