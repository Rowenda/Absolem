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
        
        //Collects data for homepage.
//Tuto Data
$sql = 'SELECT  tutoTitle , tutoText, createdAt 
        FROM tuto
        ORDER BY createdAt DESC';

$query = $pdo->prepare($sql);

$query->execute();

$tutos = $query->fetchall();

//Evenement data
$sql = 'SELECT  evenementTitle , evenementContent 
        FROM evenement';

$query = $pdo->prepare($sql);

$query->execute();

$evenement = $query->fetch();

//Presentation Data
$sql = 'SELECT  presentationTitle , presentationContent 
        FROM presentation';

$query = $pdo->prepare($sql);

$query->execute();

$presentation = $query->fetch();

$sql = 'SELECT newsTitle,  newsContent  
        FROM news';

$query = $pdo->prepare($sql);

$query->execute();

$news = $query->fetch();


//Collects data from creation.
$sql = 'SELECT  img , creaTitle, creaDescription, createdAt 
        FROM creation
        ORDER BY createdAt DESC';

$query = $pdo->prepare($sql);

$query->execute();

$creations = $query->fetchall();

//Collects data from user.
$sql = 'SELECT  userId, username , email, userStatut 
        FROM user
        ORDER BY userId ASC';

$query = $pdo->prepare($sql);

$query->execute();

$users = $query->fetchall();

render('admin',
[
        'tutos' => $tutos,
        'creations' => $creations,
        'evenement' => $evenement,
        'presentation' => $presentation,
        'news' => $news,
        'users' => $users
        ]
);