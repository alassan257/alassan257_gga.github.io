<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGA RDC - Accueil</title>
    <script type="text/javascript" src="js/main.js"></script>
    <style>
        /* Styles globaux */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
            /* background: url('https://via.placeholder.com/1920x1080') no-repeat center center fixed; Image de fond */
            background-size: cover;
            overflow: hidden;
        }

        /* Styles pour la barre de navigation */
        .navbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: rgba(0, 0, 0, 0.5); /* Fond semi-transparent */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .navbar .title {
            font-size: 20px;
            font-weight: bold;
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
        }

        .navbar .buttons a:hover {
            background: #750202; /* Couleur de survol des boutons */
        }

        /* Styles pour le conteneur du formulaire */
        .form-container {
            margin: auto;
            width: 90%;
            max-width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.6); /* Fond blanc semi-transparent */
            border-radius: 10px;
            backdrop-filter: blur(10px); /* Flou de fond */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-out;
            z-index: 1000;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Styles pour les éléments du formulaire */
        .form-container h2 {
            margin: 0;
            padding-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .form-container input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .form-container input:focus {
            border-color: #980303; /* Couleur de survol du champ */
            outline: none;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #980303; /* Couleur de fond du bouton */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #750202; /* Couleur de survol du bouton */
        }

        .form-container .error {
            color: red;
            font-size: 14px;
            display: none;
            text-align: center;
        }

        /* Styles pour le footer */
        .footer {
            padding: 15px;
            background: rgba(0, 0, 0, 0.5); /* Fond semi-transparent */
            color: white;
            text-align: center;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.5);
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .footer p {
            margin: 10px 0;
        }

        .footer a {
            color: #980303; /* Couleur des liens du footer */
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #750202; /* Couleur de survol des liens du footer */
        }

        /* Styles pour l'en-tête du formulaire */
        .form-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            justify-content: center;
        }

        .form-header img {
            margin-right: 15px;
        }

        .form-header h1 {
            margin: 0;
            font-size: 24px;
            color: #980303;
        }

        /* Media Queries pour les écrans plus petits */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }

            .navbar .title {
                font-size: 18px;
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
                flex-direction: column;
            }

            .navbar .buttons a {
                font-size: 12px;
                padding: 6px 12px;
                margin-left: 0;
                margin-top: 5px;
            }

            .form-container {
                width: 90%;
                padding: 15px;
            }

            .form-container h2 {
                font-size: 20px;
            }

            .form-container input {
                font-size: 14px;
            }

            .form-container button {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .navbar .title {
                font-size: 16px;
            }

            .navbar .menu a {
                font-size: 14px;
            }

            .navbar .buttons a {
                font-size: 10px;
                padding: 4px 8px;
            }

            .form-container {
                width: 95%;
            }

            .form-container h2 {
                font-size: 18px;
            }

            .form-container input {
                font-size: 12px;
            }

            .form-container button {
                font-size: 12px;
            }

            .footer {
                padding: 10px;
            }

            .footer p {
                font-size: 14px;
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

    <div class="form-container">
        <div class="form-header">
            <img src="img/cloud.png" alt="GGA Cloud" width="50">
            <h1>GGA Cloud</h1>
        </div>
        <h2>Connexion</h2>
        <form id="loginForm">
            <div class="error" id="error"></div>
            <input type="text" id="username" placeholder="Nom d'utilisateur" required>
            <input type="password" id="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
        <p><a href="privacy.html">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorElement = document.getElementById('error');

            if (username === '' || password === '') {
                errorElement.textContent = 'Tous les champs doivent être remplis.';
                errorElement.style.display = 'block';
            } else {
                errorElement.style.display = 'none';
                // Vous pouvez ajouter ici le code pour envoyer les données au serveur ou effectuer d'autres actions
                alert('Formulaire soumis !');
            }
        });
    </script>
</body>
</html>
