<?php
session_start();

// Détruire la session
session_unset();
session_destroy();

// Rediriger vers la page d'accueil ou de connexion
header("Location: index.php");
exit();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Déconnexion - GGA RDC</title>
  <link rel="stylesheet" href="styles.css"> <!-- Lien vers un fichier CSS externe -->
  <style>
      body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          background-color: #f4f4f4;
          font-family: Arial, sans-serif;
      }

      .message {
          text-align: center;
      }

      .message h1 {
          font-size: 24px;
          color: #333;
      }

      .message p {
          margin: 10px 0;
      }

      .button {
          padding: 10px 15px;
          background-color: #980303;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s;
          text-decoration: none;
      }

      .button:hover {
          background-color: #750202;
      }
  </style>
</head>
<body>
  <div class="message">
      <h1>Vous êtes déconnecté</h1>
      <p>Merci d'avoir utilisé notre service. Vous pouvez vous reconnecter à tout moment.</p>
      <a href="index.php" class="button">Retour à l'Accueil</a>
  </div>
</body>
</html>