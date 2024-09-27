<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGA RDC - Assurance Santé</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers un fichier CSS externe -->
    <style>
        /* Styles globaux */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed;
            background-size: cover;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
        }

        .navbar .title {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .menu {
            list-style: none;
            display: flex;
        }

        .navbar .menu li {
            margin: 0 15px;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .navbar .menu a:hover {
            color: #980303;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            color: white;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .services {
            display: flex;
            justify-content: space-around;
            padding: 50px 20px;
        }

        .service {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 30%;
        }

        .service h3 {
            margin-bottom: 15px;
        }

        .footer {
            text-align: center;
            padding: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
        }

        .footer a {
            color: #980303;
            text-decoration: none;
        }

        .footer a:hover {
            color: #750202;
        }

        @media (max-width: 768px) {
            .services {
                flex-direction: column;
                align-items: center;
            }

            .service {
                width: 80%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="title">GGA RDC</div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="about.php">Qui sommes-nous ?</a></li>
        </ul>
    </div>

    <div class="hero">
        <h1>Bienvenue chez GGA RDC</h1>
        <p>Votre cabinet de conseil et de gestion spécialisé dans les prestations de santé.</p>
        <a href="contact.php" style="padding: 10px 20px; background-color: #980303; color: white; border-radius: 5px; text-decoration: none;">Contactez-nous</a>
    </div>

    <div class="services">
        <div class="service">
            <h3>Conseil en Assurance Santé</h3>
            <p>Des conseils adaptés pour choisir la meilleure couverture santé.</p>
        </div>
        <div class="service">
            <h3>Gestion des Prestations</h3>
            <p>Une gestion efficace des demandes de prestations de santé.</p>
        </div>
        <div class="service">
            <h3>Assistance Personnalisée</h3>
            <p>Un accompagnement sur mesure pour tous vos besoins en santé.</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
        <p><a href="privacy.html">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </div>
</body>
</html>
