<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGA RDC - Inscription</title>
    <script src="https://accounts.google.com/gsi/client" async defer></script> <!-- Bibliothèque Google API -->
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
        <h2>Inscription</h2>
        <form id="registerForm">
            <div class="error" id="error"></div>
            <input type="text" id="username" placeholder="Nom d'utilisateur" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="password" id="password" placeholder="Mot de passe" required>
            <input type="password" id="confirmPassword" placeholder="Confirmer le mot de passe" required>
            <button type="submit">S'inscrire</button>
            <div align="center">
                <p>Ou</p>
            </div>

            <!-- Bouton de connexion Google -->
            <div id="g_id_onload"
                 data-client_id="VOTRE_CLIENT_ID"
                 data-callback="handleCredentialResponse">
            </div>
            <div class="g_id_signin" data-type="standard"></div>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
        <p><a href="privacy.php">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>

    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();
            const errorElement = document.getElementById('error');

            if (username === '' || email === '' || password === '' || confirmPassword === '') {
                errorElement.textContent = 'Tous les champs doivent être remplis.';
                errorElement.style.display = 'block';
            } else if (password !== confirmPassword) {
                errorElement.textContent = 'Les mots de passe ne correspondent pas.';
                errorElement.style.display = 'block';
            } else {
                errorElement.style.display = 'none';
                // Vous pouvez ajouter ici le code pour envoyer les données au serveur ou effectuer d'autres actions
                alert('Inscription réussie !');
            }
        });

        // Fonction pour gérer la réponse de l'API Google
        function handleCredentialResponse(response) {
            console.log("Encoded JWT ID token: " + response.credential);
            // Envoyez le token au serveur pour vérifier l'utilisateur ou connectez l'utilisateur directement.
        }
    </script>
</body>
</html>
