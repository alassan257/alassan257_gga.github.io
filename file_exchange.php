<?php
session_start();
require_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GGA RDC - Échange de Fichiers</title>
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

      .chat-box {
          border: 1px solid #ccc;
          border-radius: 10px;
          padding: 20px;
          max-height: 400px;
          overflow-y: auto;
          background: white;
          margin-bottom: 20px;
      }

      .message {
          margin-bottom: 10px;
      }

      .message .sender {
          font-weight: bold;
      }

      .drop-area {
          border: 2px dashed #ccc;
          border-radius: 10px;
          padding: 20px;
          text-align: center;
          margin-bottom: 20px;
          transition: background-color 0.3s;
      }

      .drop-area.hover {
          background-color: #e2e2e2;
      }

      .footer {
          display: flex;
          justify-content: space-between;
          align-items: center;
      }

      .footer button {
          padding: 10px 15px;
          background-color: #980303;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s;
      }

      .footer button:hover {
          background-color: #750202;
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
      <h1>Échange de Fichiers</h1>
      <div class="chat-box" id="chat-box">
          <!-- Les messages seront ajoutés ici dynamiquement via JavaScript ou PHP -->
      </div>

      <div class="drop-area" id="drop-area">
          <p>Glissez et déposez votre fichier ici ou cliquez pour sélectionner un fichier</p>
          <input type="file" id="fileInput" name="file" style="display: none;">
      </div>

      <div class="footer">
          <button id="sendButton">Envoyer le Fichier</button>
      </div>
  </div>

  <script>
      const dropArea = document.getElementById('drop-area');
      const fileInput = document.getElementById('fileInput');
      const chatBox = document.getElementById('chat-box');

      dropArea.addEventListener('click', () => {
          fileInput.click();
      });

      dropArea.addEventListener('dragover', (event) => {
          event.preventDefault();
          dropArea.classList.add('hover');
      });

      dropArea.addEventListener('dragleave', () => {
          dropArea.classList.remove('hover');
      });

      dropArea.addEventListener('drop', (event) => {
          event.preventDefault();
          dropArea.classList.remove('hover');
          const files = event.dataTransfer.files;
          handleFiles(files);
      });

      fileInput.addEventListener('change', () => {
          const files = fileInput.files;
          handleFiles(files);
      });

      function handleFiles(files) {
          if (files.length > 0) {
              const file = files[0];
              const sender = "<?php echo $_SESSION['username']; ?>"; // Récupérer le nom d'utilisateur de la session

              // Créer un message pour afficher le fichier envoyé
              const message = document.createElement('div');
              message.classList.add('message');
              message.innerHTML = `<span class="sender">${sender} :</span> ${file.name}`;
              chatBox.appendChild(message);

              // Réinitialiser l'input
              fileInput.value = '';
              chatBox.scrollTop = chatBox.scrollHeight; // Faire défiler vers le bas
          }
      }

      document.getElementById('sendButton').addEventListener('click', () => {
          fileInput.click(); // Ouvre le sélecteur de fichiers si le bouton est cliqué
      });
  </script>
</body>
</html>