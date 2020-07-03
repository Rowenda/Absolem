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

$sql = 'SELECT newsTitle, newsContent 
        FROM news';

// On commence par préparer la requête SQL
$query = $pdo->prepare($sql);

// Exécution de la requête
$query->execute();

// Récupération des résultats
$news = $query->fetch();


if (!empty($_POST))
    {

        $newsTitle = $_POST['newsTitle'];
        $newsContent = $_POST['newsContent'];

        $sql = 'UPDATE news 
        SET newsTitle = ?, newsContent = ?';
        // On commence par préparer la requête SQL
        $query = $pdo->prepare($sql);

        // Exécution de la requête
        $query->execute([$newsTitle, $newsContent]);
    }

    render('admin/edit/news', [
        'news'=> $news,
    ]);