<?php
// Inclusion du fichier de configuration
require_once '../config/config.php';

// Vérification de la méthode de requête
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et nettoyage des données POST
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validation des données
    $errors = [];
    if (empty($nom)) {
        $errors[] = "Le nom est requis.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Une adresse email valide est requise.";
    }
    if (empty($password)) {
        $errors[] = "Le mot de passe est requis.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    }

    // Vérification si l'email existe déjà
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
        $errors[] = "Cette adresse email est déjà utilisée.";
    }

    if (empty($errors)) {
        // Hachage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insertion de l'utilisateur dans la base de données
        $stmt = $pdo->prepare("INSERT INTO users (nom, email, password) VALUES (:nom, :email, :password)");
        if ($stmt->execute([
            'nom' => $nom,
            'email' => $email,
            'password' => $hashed_password
        ])) {
            echo json_encode(['success' => true, 'message' => 'Inscription réussie.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Une erreur est survenue lors de l\'inscription.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    }
} else {
    // Méthode non autorisée
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
}
?>
