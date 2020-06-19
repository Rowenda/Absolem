<?php 

////////////////////////////////////////
// Inclusion des dépendances si besoin
require '../vendor/autoload.php';
require '../config.php';
require SRC_DIR . '/functions.php';

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

$sql = 'SELECT PresentationTitle, PresentationContent 
        FROM presentation';

// On commence par préparer la requête SQL
$query = $pdo->prepare($sql);

// Exécution de la requête
$query->execute();

// Récupération des résultats
$presentation = $query->fetch();

// var_dump($posts);

$sql = 'SELECT evenementTitle,  evenementContent  
        FROM evenement';

// On commence par préparer la requête SQL
$query = $pdo->prepare($sql);

// Exécution de la requête
$query->execute();

// Récupération des résultats
$evenement = $query->fetch();

$sql = 'SELECT newsTitle,  newsContent  
        FROM news';

// On commence par préparer la requête SQL
$query = $pdo->prepare($sql);

// Exécution de la requête
$query->execute();

// Récupération des résultats
$news = $query->fetch();

/////////////////////////////////////////////////////////////
// Affichage : inclusion du fichier de template index.phtml
render ('home',  [ 
        'presentation'=> $presentation, 
        'evenement'=> $evenement, 
        'news'=> $news
        ]);