<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité</title>
    <style>
        /* Styles globaux */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /* background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed; Image de fond */
            background-size: cover;
            color: #333;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: rgba(0, 0, 0, 0.5); /* Fond semi-transparent */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .navbar .title {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar .menu li {
            margin: 0 15px;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .navbar .menu a:hover {
            color: #980303; /* Couleur de survol */
        }

        /* Styles pour le conteneur principal */
        .container {
            margin: auto;
            width: 90%;
            max-width: 1200px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.8); /* Fond blanc semi-transparent */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(8px); /* Flou de fond */
            z-index: 1000;
        }

        h1, h2 {
            color: #980303; /* Couleur de base */
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            border-bottom: 2px solid #980303; /* Ligne sous le titre */
            padding-bottom: 10px;
        }

        h2 {
            font-size: 28px;
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
            background: rgba(0, 0, 0, 0.5); /* Fond sombre semi-transparent */
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar .title {
                font-size: 20px;
            }

            .navbar .menu {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar .menu li {
                margin: 5px 0;
            }

            .container {
                width: 95%;
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .navbar .title {
                font-size: 18px;
            }

            .navbar .menu a {
                font-size: 16px;
            }

            .container {
                width: 100%;
                padding: 15px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
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
            <li><a href="privacy.html">Politique de Confidentialité</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>Politique de Confidentialité</h1>
        
        <section>
            <h2>1. Introduction</h2>
            <p>Nous attachons une grande importance à la protection de vos données personnelles. Cette politique de confidentialité vous informe sur la manière dont nous collectons, utilisons et protégeons vos informations.</p>
        </section>

        <section>
            <h2>2. Informations Collectées</h2>
            <p>Nous collectons des informations personnelles lorsque vous utilisez notre site web, telles que votre nom, adresse e-mail et informations de connexion. Nous pouvons également recueillir des données sur votre utilisation du site, telles que les pages visitées et la durée de votre visite.</p>
        </section>

        <section>
            <h2>3. Utilisation des Données</h2>
            <p>Les informations collectées sont utilisées pour améliorer nos services, personnaliser votre expérience et vous contacter en cas de besoin. Nous pouvons également utiliser vos données pour des communications marketing, mais uniquement si vous avez donné votre consentement.</p>
        </section>

        <section>
            <h2>4. Protection des Données</h2>
            <p>Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos informations contre l'accès non autorisé, la modification, la divulgation ou la destruction. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est totalement sécurisée, et nous ne pouvons garantir une sécurité absolue.</p>
        </section>

        <section>
            <h2>5. Cookies</h2>
            <p>Notre site utilise des cookies pour améliorer votre expérience en ligne. Les cookies sont de petits fichiers stockés sur votre appareil qui nous aident à vous offrir des services personnalisés et à analyser l'utilisation de notre site.</p>
        </section>

        <section>
            <h2>6. Vos Droits</h2>
            <p>Vous avez le droit d'accéder, de corriger ou de supprimer les informations personnelles que nous détenons à votre sujet. Vous pouvez également vous opposer à l'utilisation de vos données à des fins de marketing en nous contactant.</p>
        </section>

        <section>
            <h2>7. Modifications de la Politique</h2>
            <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Les changements seront publiés sur cette page et seront effectifs dès leur publication.</p>
        </section>

        <section>
            <h2>8. Contact</h2>
            <p>Pour toute question concernant cette politique de confidentialité, veuillez nous contacter à l'adresse suivante :</p>
            <address>
                <p>Email : <a href="mailto:rdc@assurancegga.cd">rdc@assurancegga.cd</a></p>
                <p>Téléphone : +243 818 896 969</p>
                <p>Adresse : Boulevard du 30 juin. Immeuble Le 66, 2ème étage. Réf: En diagonale de la CNSS, Blanchisserie 5 à Sec.</p>
            </address>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </footer>
</body>
</html>