<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['facture'])) {
    $fichier = $_FILES['facture'];
    $nom_fichier = basename($fichier['name']);
    $chemin_destination = 'uploads/' . $nom_fichier;
    $types_autorises = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

    if ($fichier['error'] !== UPLOAD_ERR_OK) {
        $message = "Erreur lors de l'upload : " . $fichier['error'];
    } elseif (!in_array($fichier['type'], $types_autorises)) {
        $message = "Type de fichier non autorisé. Veuillez envoyer un fichier PDF ou DOC.";
    } elseif (!move_uploaded_file($fichier['tmp_name'], $chemin_destination)) {
        $message = "Une erreur s'est produite lors de l'envoi de la facture. Vérifiez les permissions du dossier 'uploads'.";
    } else {
        $message = "La facture a été envoyée avec succès.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi de factures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        #drop_zone {
            border: 2px dashed #007bff;
            border-radius: 20px;
            width: 300px;
            height: 200px;
            padding: 20px;
            text-align: center;
            margin: 20px auto;
            background-color: #fff;
            transition: all 0.3s ease;
        }
        #drop_zone:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }
        #drop_zone p {
            margin-top: 70px;
            color: #666;
        }
        .message {
            text-align: center;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <h1>Envoi de factures</h1>
    
    <?php if (!empty($message)) : ?>
        <p class="message <?php echo strpos($message, 'succès') !== false ? 'success' : 'error'; ?>">
            <?php echo $message; ?>
        </p>
    <?php endif; ?>

    <div id="drop_zone">
        <p>Glissez et déposez votre facture ici ou cliquez pour sélectionner un fichier</p>
        <form id="upload_form" action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="facture" id="file_input" style="display: none;" accept=".pdf,.doc,.docx">
        </form>
    </div>

    <script>
        const dropZone = document.getElementById('drop_zone');
        const fileInput = document.getElementById('file_input');
        const uploadForm = document.getElementById('upload_form');

        dropZone.addEventListener('click', () => fileInput.click());

        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.style.backgroundColor = '#f0f0f0';
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.style.backgroundColor = '';
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.style.backgroundColor = '';
            fileInput.files = e.dataTransfer.files;
            uploadForm.submit();
        });

        fileInput.addEventListener('change', () => {
            uploadForm.submit();
        });
    </script>
</body>
</html>