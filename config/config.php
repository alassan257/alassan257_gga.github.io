<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'u488738296_gga_base');
define('DB_USER', 'u488738296_u488738296');
define('DB_PASS', 'Cisco@2020!!');

// Configuration du site
define('SITE_NAME', 'GGA RDC');
// define('SITE_URL', 'http://');

// Configuration des e-mails
define('SMTP_HOST', 'smtp.votreserveur.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'alassan257@gmail.com');
define('SMTP_PASS', '1234');

// Configuration du chemin
define('ROOT_PATH', dirname(__FILE__) . '/../');
define('INCLUDE_PATH', ROOT_PATH . 'includes/');
define('TEMPLATE_PATH', ROOT_PATH . 'templates/');

// Configuration de la session
ini_set('session.cookie_lifetime', 3600); // Durée de vie du cookie en secondes
ini_set('session.gc_maxlifetime', 3600); // Durée de vie maximale de la session

// Configuration de l'affichage des erreurs (à désactiver en production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fuseau horaire
date_default_timezone_set('Europe/Paris');

// Clé secrète pour le hachage
define('SECRET_KEY', 'votre_cle_secrete_longue_et_complexe');

// Limite de tentatives de connexion
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_ATTEMPT_TIMEOUT', 300); // 5 minutes

// Configuration du cache
define('CACHE_ENABLED', true);
define('CACHE_DURATION', 3600); // 1 heure

// Version de l'application
define('APP_VERSION', '1.0.0');

// Établissement de la connexion PDO
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}



?>
