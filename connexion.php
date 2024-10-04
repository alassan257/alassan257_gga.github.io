
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGA RDC - Accueil</title>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="navbar">
        <div class="title"><a href="index.php" style="text-decoration: none; color:#fff;">GGA RDC</a></div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <!-- <li><a href="#">Services</a></li> -->
            <li><a href="about.php">Qui sommes-nous ?</a></li>
        </ul>
        <div class="buttons">
            <a href="connexion.php">Connexion</a>
            <!-- <a href="inscription.php">Inscription</a> -->
        </div>
 </div>

    <div class="form-container">
        <div class="form-header">
            <img src="img/cloud.png" alt="GGA Cloud" width="50">
            <h1>GGA Cloud</h1>
        </div>
        <h2>Connexion</h2>
        <form id="loginForm" align="center">
            <div class="error" id="error"></div>
            <input type="email" id="Email" placeholder="Email" required>
            <input type="password" id="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
            <!-- <div align="center">
                <p>Ou</p>
            </div> -->

            <!-- <div id="g_id_onload" data-client_id="VOTRE_CLIENT_ID" data-callback="handleCredentialResponse"></div>
            <div class="g_id_signin" data-type="standard"></div> -->
        </form>
    </div>
<?php
    require_once 'page_split/footer.php';
?>
    
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('Email').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorElement = document.getElementById('error');

            if (username === '' || password === '') {
                errorElement.textContent = 'Tous les champs doivent être remplis.';
                errorElement.style.display = 'block';
            } else {
                errorElement.style.display = 'none';
                alert('Formulaire soumis !');
            }
        });

        // function handleCredentialResponse(response) {
        //     console.log("Encoded JWT ID token: " + response.credential);
        // }
    </script>
</body>
</html>