<?php
require_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGA RDC - Gestion des Utilisateurs</title>
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

      table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
      }

      table, th, td {
          border: 1px solid #ccc;
      }

      th, td {
          padding: 10px;
          text-align: left;
      }

      th {
          background-color: #f2f2f2;
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
          <h1>Gestion des Utilisateurs</h1>
      </div>

      <div class="card">
          <h2>Liste des Utilisateurs</h2>
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nom d'utilisateur</th>
                      <th>Email</th>
                      <th>Rôle</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  // Exemple de données, remplace par une requête à la base de données
                  $users = [
                      ['id' => 1, 'username' => 'utilisateur1', 'email' => 'utilisateur1@example.com', 'role' => 'Administrateur'],
                      ['id' => 2, 'username' => 'utilisateur2', 'email' => 'utilisateur2@example.com', 'role' => 'Utilisateur'],
                  ];

                  foreach ($users as $user) {
                      echo "<tr>
                              <td>{$user['id']}</td>
                              <td>{$user['username']}</td>
                              <td>{$user['email']}</td>
                              <td>{$user['role']}</td>
                              <td>
                                  <a href='edit_user.php?id={$user['id']}' class='button'>Modifier</a>
                                  <a href='delete_user.php?id={$user['id']}' class='button' style='background-color: #d9534f;'>Supprimer</a>
                              </td>
                            </tr>";
                  }
                  ?>
              </tbody>
          </table>
      </div>
  </div>

  <div class="footer">
      <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
  </div>
</body>
</html>