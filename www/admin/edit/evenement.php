<?php
// Inclusion du fichier d'autoload de Composer
require_once '../../../vendor/autoload.php';
require_once '../../../config.php';
require_once SRC_DIR . '/functions.php';

$dsn = 'mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME . ';charset=utf8';

///////////////////////////////////////////////////////
// Créer une connexion à la base de données avec PDO
// PDO est une classe PHP qu'on va instancier (créer un objet PDO)
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

$sql = 'SELECT evenementTitle, evenementContent 
        FROM evenement';

// On commence par préparer la requête SQL
$query = $pdo->prepare($sql);

// Exécution de la requête
$query->execute();

// Récupération des résultats
$evenement = $query->fetch();


if (!empty($_POST))
    {

        $evenementTitle = $_POST['evenementTitle'];
        $evenementContent = $_POST['evenementContent'];

        $sql = 'UPDATE evenement 
        SET evenementTitle = ?, evenementContent = ?';
        // On commence par préparer la requête SQL
        $query = $pdo->prepare($sql);

        // Exécution de la requête
        $query->execute([$evenementTitle, $evenementContent]);
    }

    render('admin/edit/evenement', [
        'evenement'=> $evenement,
    ]);