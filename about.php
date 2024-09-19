<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui sommes-nous ?</title>
    <style>
        /* Styles globaux */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed; Image de fond */
            background-size: cover;
            color: #333;
        }

        /* Styles pour la barre de navigation */
        .navbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: rgba(0, 0, 0, 0.7); /* Fond sombre semi-transparent */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .navbar .title {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar .menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar .menu li {
            margin: 0 10px;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .navbar .menu a:hover {
            color: #980303; /* Couleur de survol */
            font-weight: bold;
        }

        .navbar .buttons {
            display: flex;
            align-items: center;
        }

        .navbar .buttons a {
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            background: #980303; /* Couleur de fond des boutons */
            font-size: 14px;
            transition: background-color 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .navbar .buttons a:hover {
            background: #750202; /* Couleur de survol des boutons */
        }

        /* Styles pour le conteneur du contenu principal */
        .container {
            flex: 1;
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9); /* Fond blanc semi-transparent */
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(8px); /* Flou de fond */
        }

        h1, h2 {
            color: #980303; /* Couleur de base */
            margin-bottom: 20px;
        }

        h1 {
            font-size: 32px;
            border-bottom: 2px solid #980303; /* Ligne sous le titre */
            padding-bottom: 10px;
        }

        h2 {
            font-size: 24px;
            border-bottom: 1px solid #ddd; /* Ligne sous les sous-titres */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.8;
            margin-bottom: 20px;
        }

        address p {
            font-style: normal;
        }

        /* Styles pour le footer */
        footer {
            padding: 20px;
            background: rgba(0, 0, 0, 0.7); /* Fond sombre semi-transparent */
            color: white;
            text-align: center;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.5);
            width: 100%;
        }

        footer p {
            margin: 10px 0;
        }

        footer a {
            color: #980303; /* Couleur des liens du footer */
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #750202; /* Couleur de survol des liens du footer */
        }

        /* Media Queries pour les écrans plus petits */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar .title {
                font-size: 20px;
            }

            .navbar .menu {
                flex-direction: column;
                width: 100%;
                margin-top: 10px;
            }

            .navbar .menu li {
                margin: 5px 0;
            }

            .navbar .buttons {
                margin-top: 10px;
            }

            .navbar .buttons a {
                font-size: 12px;
                padding: 6px 12px;
            }

            .container {
                width: 100%;
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .navbar .menu a {
                font-size: 14px;
            }

            .navbar .buttons a {
                font-size: 10px;
                padding: 4px 8px;
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="title">GGA RDC</div>
        <ul class="menu">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="about.html">Qui sommes-nous ?</a></li>
        </ul>
        <div class="buttons">
            <a href="index.html">Connexion</a>
            <a href="inscription.html">Inscription</a>
        </div>
    </div>

    <div class="container">
        <h1>Qui sommes-nous ?</h1>

        <section id="about">
            <h2>Notre Histoire</h2>
            <p>Le GGA est un Groupe international de conseil et de gestion en assurance créé en France en 1976. Courtier spécialiste en assurance santé locale, internationale et risques divers, le GGA répond aux besoins des locaux et expatriés résidents sur le territoire Africain, Européen et au Moyen-Orient.</p>
        </section>

        <section id="gga-rdc">
            <h2>GGA RDC</h2>
            <p>Le GGA RDC est une société filiale de GGA France, spécialisée dans la gestion des prestations de santé. Nous proposons des solutions de couverture médicale individuelle ou collective en autofinancement et en assurance aux locaux et expatriés résidents sur le territoire congolais.</p>
            <p>En tant que seul gestionnaire du marché des assurances congolais agréé par l'Autorité de Régulation et de Contrôle des Assurances (ARCA), le GGA RDC dispose de tous les moyens techniques, opérationnels et humains pour une meilleure gestion et suivi des prestations médicales. Cela inclut un logiciel à la pointe de la technologie.</p>
        </section>

        <section id="contact">
            <h2>Nous Contacter</h2>
            <p>Pour toute question ou information supplémentaire, n'hésitez pas à nous contacter :</p>
            <address>
                <p>Email : <a href="mailto:rdc@assurancegga.cd">rdc@assurancegga.cd</a></p>
                <p>Téléphone : +243 818 896 969</p>
                <p>Call center : +243 99 6084 636, 99 6084 637</p>
                <p>Adresse Kinshasa: Boulevard du 30 juin. Immeuble Le 66, 2ème étage. Réf: En diagonale de la CNSS, Blanchisserie 5 à Sec.</p>
            </address>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
        <p><a href="privacy.html">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </footer>
</body>
</html>
