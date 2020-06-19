<?php

////////////////////////////////////////
// Inclusion des dépendances si besoin /
////////////////////////////////////////

// Inclusion du fichier d'autoload de Composer
require_once '../vendor/autoload.php';
require_once '../config.php';
require_once SRC_DIR . '/functions.php';

///////////////////////////////////////////////////////
// Créer une connexion à la base de données avec PDO
// PDO est une classe PHP qu'on va instancier (créer un objet PDO)

$dsn = 'mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME . ';charset=utf8';

$pdo = new PDO(
    $dsn, // (string) DSN (Data Source Name)
    BDD_USER, // Utilisateur
    BDD_PASSWORD, // Mot de passe
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);

///////////////////////////////////////////////////////////////
// Traitements : récupérer les données pour afficher la liste
// des articles 

$sql = 'SELECT id , img, creaTitle, creaDescription, createdAt 
        FROM creation
        ORDER BY id DESC';

$query = $pdo->prepare($sql);

$query->execute();

$creations = $query->fetchall();

render('crea', ['creations' => $creations]);