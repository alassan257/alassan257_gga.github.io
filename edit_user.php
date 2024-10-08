<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGA RDC - Modifier Utilisateur</title>
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

      .form-group {
          margin-bottom: 15px;
      }

      .form-group label {
          display: block;
          margin-bottom: 5px;
          color: #333;
      }

      .form-group input, .form-group select {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
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
          <h1>Modifier l'Utilisateur</h1>
      </div>

      <form action="update_user.php" method="POST">
          <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" id="name" name="name" value="Jean Dupont" required>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="jean.dupont@example.com" required>
          </div>
          <div class="form-group">
              <label for="role">Rôle</label>
              <select id="role" name="role" required>
                  <option value="administrateur" selected>Administrateur</option>
                  <option value="utilisateur">Utilisateur</option>
              </select>
          </div>
          <button type="submit" class="button">Mettre à jour</button>
      </form>
  </div>

  <div class="footer">
      <p>&copy; 2024 GGA SA. Tous droits réservés.</p>
  </div>
</body>
</html>