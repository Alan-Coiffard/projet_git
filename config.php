<?php
// Lire les variables d'environnement à partir du fichier .env
$env = parse_ini_file('.env');

// Définir les variables d'environnement en tant que constantes
foreach ($env as $key => $value) {
    define($key, $value);
}

$db_host = DB_HOST;
$db_username = DB_USERNAME;
$db_password = DB_PASSWORD;
$db_name = DB_NAME;

// Connexion à la base de données
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}