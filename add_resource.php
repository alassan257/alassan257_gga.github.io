<?php
require_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGA RDC - Ajouter une Ressource</title>
  <link rel="stylesheet" href="styles.css"> <!-- Lien vers un fichier CSS externe -->
  <style>
      /* Styles globaux */
      body {
          margin: 0;
          padding: 0;
          font-family: Arial, sans-serif;
          background: #f4f4f4;
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

      .container {
          padding: 20px;
      }

      .header {
          text-align: center;
          margin-bottom: 30px;
      }

      .header h1 {
          font-size: 28px;
          color: #333;
      }

      .card {
          background: white;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          margin: 20px 0;
      }

      .card h2 {
          margin-top: 0;
      }

      .button {
          padding: 10px 15px;
          background-color: #980303;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s;
      }

      .button:hover {
          background-color: #750202;
      }

      .footer {
          text-align: center;
          padding: 15px;
          background: rgba(0, 0, 0, 0.7);
          color: white;
      }

      form {
          display: flex;
          flex-direction: column;
      }

      label {
          margin: 10px 0 5px;
      }

      input[type="text"],
      input[type="url"],
      textarea {
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          margin-bottom: 15px;
      }

      textarea {
          resize: vertical;
      }
  </style>
</head>
<body>
  <div class="navbar">
      <div class="title"><a href="index.php" style="text-decoration: none; color:#fff;">GGA RDC</a></div>
      <ul class="menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="about.php">Qui sommes-nous ?</a></li>
          <li><a href="logout.php">Déconnexion</a></li>
      </ul>
  </div>

  <div class="container">
      <div class="header">
          <h1>Ajouter une Ressource</h1>
      </div>

      <div class="card">
          <h2>Détails de la Ressource</h2>
          <form action="process_add_resource.php" method="POST">
              <label for="name">Nom de la Ressource :</label>
              <input type="text" id="name" name="name" required>

              <label for="url">URL de la Ressource :</label>
              <input type="url" id="url" name="url" required>

              <label for="description">Description :</label>
              <textarea id="description" name="description" rows="4" required></textarea>

              <button type="submit" class="button">Ajouter la Ressource</button>
          </form>
      </div>
  </div>

  <div class="footer">
      <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
  </div>
</body>
</html>