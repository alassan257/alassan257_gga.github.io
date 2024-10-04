<?php
// Inclusion du fichier de configuration
require_once '../config/config.php';

// Vérification de la méthode de requête
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données POST
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';

    // Vérification des champs
    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Veuillez remplir tous les champs.']);
        exit;
    }

    // Vérification des tentatives de connexion
    if (checkLoginAttempts($email)) {
        echo json_encode(['success' => false, 'message' => 'Trop de tentatives. Veuillez réessayer plus tard.']);
        exit;
    }

    // Vérification des identifiants
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Connexion réussie
        $_SESSION['user_id'] = $user['id'];
        resetLoginAttempts($email);
        echo json_encode(['success' => true, 'message' => 'Connexion réussie.']);
    } else {
        // Échec de la connexion
        incrementLoginAttempts($email);
        echo json_encode(['success' => false, 'message' => 'Identifiants incorrects.']);
    }
} else {
    // Méthode non autorisée
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
}

// // Fonction pour vérifier les tentatives de connexion
// function checkLoginAttempts($email) {
//     global $pdo;
//     $stmt = $pdo->prepare("SELECT attempts, last_attempt FROM login_attempts WHERE email = :email");
//     $stmt->execute(['email' => $email]);
//     $result = $stmt->fetch();

//     if ($result) {
//         $attempts = $result['attempts'];
//         $lastAttempt = strtotime($result['last_attempt']);
//         $currentTime = time();

//         if ($attempts >= MAX_LOGIN_ATTEMPTS && ($currentTime - $lastAttempt) < LOGIN_ATTEMPT_TIMEOUT) {
//             return true;
//         }
//     }
//     return false;
// }

// // Fonction pour incrémenter les tentatives de connexion
// function incrementLoginAttempts($email) {
//     global $pdo;
//     $stmt = $pdo->prepare("INSERT INTO login_attempts (email, attempts, last_attempt) 
//                            VALUES (:email, 1, NOW()) 
//                            ON DUPLICATE KEY UPDATE attempts = attempts + 1, last_attempt = NOW()");
//     $stmt->execute(['email' => $email]);
// }

// // Fonction pour réinitialiser les tentatives de connexion
// function resetLoginAttempts($email) {
//     global $pdo;
//     $stmt = $pdo->prepare("DELETE FROM login_attempts WHERE email = :email");
//     $stmt->execute(['email' => $email]);
// }
?>
