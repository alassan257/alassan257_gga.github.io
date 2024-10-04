<?php
session_start();
require_once 'config/config.php';

// Exemple de récupération des ressources depuis la base de données
$resources = []; // Remplace par une requête pour récupérer les ressources de ta base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGA RDC - Gestion des Ressources</title>
  <link rel="stylesheet" href="styles.css"> <!-- Lien vers un fichier CSS externe -->
  <style>
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

      .container {
          padding: 20px;
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
          background-color: #980303;
          color: white;
      }

      .delete-button {
          background-color: #d9534f;
          color: white;
          border: none;
          padding: 5px 10px;
          cursor: pointer;
          border-radius: 5px;
      }

      .delete-button:hover {
          background-color: #c9302c;
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
      <h1>Gestion des Ressources</h1>
      <table>
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nom de la Ressource</th>
                  <th>Description</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($resources as $resource): ?>
              <tr>
                  <td><?php echo $resource['id']; ?></td>
                  <td><?php echo $resource['name']; ?></td>
                  <td><?php echo $resource['description']; ?></td>
                  <td>
                      <form action="delete_resource.php" method="POST" style="display:inline;">
                          <input type="hidden" name="resourceId" value="<?php echo $resource['id']; ?>">
                          <button type="submit" class="delete-button">Supprimer</button>
                      </form>
                  </td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>
</body>
</html>