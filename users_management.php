<php



?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGA RDC - Administration</title>
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

      .user-table {
          width: 100%;
          border-collapse: collapse;
          margin-bottom: 20px;
      }

      .user-table th, .user-table td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
      }

      .user-table th {
          background-color: #980303;
          color: white;
      }

      .user-table tr:nth-child(even) {
          background-color: #f2f2f2;
      }

      .user-table tr:hover {
          background-color: #ddd;
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
  </style>
</head>
<body>
  <div class="navbar">
      <div class="title"><a href="index.php" style="text-decoration: none; color:#fff;">GGA RDC</a></div>
      <ul class="menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="about.php">Qui sommes-nous ?</a></li>
          <li><a href="admin.php">Administration</a></li>
      </ul>
  </div>

  <div class="container">
      <div class="header">
          <h1>Gestion des Utilisateurs</h1>
          <button class="button" onclick="window.location.href='add_user.php'">Ajouter un Utilisateur</button>
      </div>

      <table class="user-table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Rôle</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              <!-- Exemples de lignes d'utilisateur -->
              <tr>
                  <td>1</td>
                  <td>Jeancy Dala</td>
                  <td>jeancy.dala@gmail.com</td>
                  <td>Administrateur</td>
                  <td><button class="button" onclick="window.location.href='edit_user.php?id=1'">Modifier</button></td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Alassan Koumba</td>
                  <td>alassan257@gmail.com</td>
                  <td>Utilisateur</td>
                  <td><button class="button" onclick="window.location.href='edit_user.php?id=2'">Modifier</button></td>
              </tr>
          </tbody>
      </table>
  </div>

  <div class="footer">
      <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
  </div>
</body>
</html>