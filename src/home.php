<?php
// Définition de constantes de configuration
define('BDD_HOST', 'localhost');
define('BDD_NAME', 'creabsolem');
define('BDD_USER', 'root');
define('BDD_PASSWORD', 'Rowenda');

    $dsn = 'mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME . ';charset=utf8';

    ///////////////////////////////////////////////////////
    // Créer une connexion à la base de données avec PDO
    // PDO est une classe PHP qu'on va instancier (créer un objet PDO)
    $pdo = new PDO(
        $dsn, // (string) DSN (Data Source Name)
        BDD_USER, // Utilisateur
        BDD_PASSWORD, // Mot de passe
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

//////////////////////////////////////////
//Execution d'une requête SQL. 

$query=$pdo->query('SELECT * FROM accueil ORDER BY asc');
$alldatas=$query->fetchall();

var_dump($alldatas);


include '../views/base.phtml';
