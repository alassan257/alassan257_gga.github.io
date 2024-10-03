<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGA RDC - Espace Privé d'Échange de Fichiers</title>
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

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .drop-area {
            border: 2px dashed #980303;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            background-color: white;
            margin: 20px 0;
            transition: background-color 0.3s;
        }

        .drop-area.hover {
            background-color: #f0f0f0;
        }

        .file-list {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        .file-list ul {
            list-style-type: none;
            padding: 0;
        }

        button {
            padding: 10px 20px;
            background-color: #980303;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #7a0202;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="title">GGA RDC - Espace Privé d'Échange de Fichiers</div>
    </div>
    <div class="container">
        <div class="header">
            <h1>Déposez vos fichiers ici</h1>
        </div>
        <div class="drop-area" id="drop-area">
            <p>Faites glisser et déposez vos fichiers ici ou cliquez pour sélectionner.</p>
        </div>
        <div class="file-list">
            <h3>Fichiers sélectionnés :</h3>
            <ul id="file-list"></ul>
        </div>
        <button id="upload-button">Valider l'envoi</button>
    </div>

    <script>
        const dropArea = document.getElementById('drop-area');
        const fileList = document.getElementById('file-list');
        const uploadButton = document.getElementById('upload-button');
        const filesToUpload = [];

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

        dropArea.addEventListener('click', () => {
            const input = document.createElement('input');
            input.type = 'file';
            input.multiple = true;
            input.onchange = (event) => {
                const files = event.target.files;
                handleFiles(files);
            };
            input.click();
        });

        function handleFiles(files) {
            for (let i = 0; i < files.length; i++) {
                const li = document.createElement('li');
                li.textContent = files[i].name;
                fileList.appendChild(li);
                filesToUpload.push(files[i]);
            }
        }

        uploadButton.addEventListener('click', () => {
            if (filesToUpload.length === 0) {
                alert("Aucun fichier sélectionné !");
                return;
            }

            const formData = new FormData();
            for (let i = 0; i < filesToUpload.length; i++) {
                formData.append('file[]', filesToUpload[i]);
            }

            fetch('index.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                alert(data); // Affiche le message de succès ou d'erreur
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
        });
    </script>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uploads_dir = 'uploads'; // Dossier où vous voulez stocker les fichiers
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0755, true); // Créer le dossier s'il n'existe pas
        }

        foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
            if ($_FILES['file']['error'][$key] == 0) {
                $name = basename($_FILES['file']['name'][$key]);
                if (move_uploaded_file($tmp_name, "$uploads_dir/$name")) {
                    echo "Le fichier a été téléchargé avec succès : $name<br>";
                } else {
                    echo "Erreur lors du téléchargement du fichier : $name<br>";
                }
            } else {
                echo "Erreur lors du téléchargement du fichier : " . $_FILES['file']['error'][$key] . "<br>";
            }
        }
    }
    ?>
</body>
</html>
