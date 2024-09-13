<?php

$host = 'localhost';
$dbname = 'library';
$username = 'root';
$password = 'antoine';
$charset = "utf8mb4";
$port = 3306;

// Options de connexion
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active les exceptions PDO
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Récupère les résultats sous forme de tableau associatif
    PDO::ATTR_EMULATE_PREPARES => false, // Désactive l'émulation des requêtes préparées
];

try {
    $pdo = new PDO(
        dsn: "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset",
        username: "$username",
        password: "$password",
    );
    // echo "Connexion à la base de données établie avec succès.";
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
