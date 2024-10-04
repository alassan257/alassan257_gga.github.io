<?php
require_once 'config/config.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGA RDC - Assurance Santé</title>
  <link rel="stylesheet" href="css/style_index.css"> <!-- Lien vers un fichier CSS externe -->
  
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

  <div class="hero">
      <img src="img/bg.jpg" />
      <div class="content">
          <h1>Bienvenue chez GGA RDC</h1>
          <p>Votre cabinet de conseil et de gestion spécialisé dans les prestations de santé.</p>
          <a href="connexion.php" style="padding: 10px 20px; background-color: #980303; color: white; border-radius: 5px; text-decoration: none;">Connexion</a>
          
      </div>
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
      <p><a href="privacy.php">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
  </div>
</body>
</html>