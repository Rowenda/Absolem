<?php

// Inclusion du fichier d'autoload de Composer
require_once '../vendor/autoload.php';
require_once '../config.php';
require_once SRC_DIR . '/functions.php';

// Initialisation des variables que l'on souhaite transmettre au template
$email = null;
$error = null;

// Si le formulaire a été soumis
if (!empty($_POST)) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    
$dsn = 'mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME . ';charset=utf8';

$pdo = new PDO(
    $dsn, // (string) DSN (Data Source Name)
    BDD_USER, // Utilisateur
    BDD_PASSWORD, // Mot de passe
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);


    $sql = 'SELECT * 
            FROM User
            WHERE email = ?';

    // On commence par préparer la requête SQL
    $query = $pdo->prepare($sql);

    // Exécution de la requête
    $query->execute([$email]);

    $user = $query->fetch();

    if ($user) {

        // L'adresse email existe bien dans la BDD, il faut maintenant vérifier le mot de passe
        if (password_verify($password, $user['password'])) {

            // Enregistrement de l'utilisateur en session pour le connecter
            userSessionRegister($user['userId'], $user['email'], $user['username'], $user['userStatut']);

            header('Location: ' . buildUrl('/admin'));
            exit;
        }
        else {
            $error = 'Identifiants incorrects.';
        }
    }
    else {
        $error = 'Identifiants incorrects.';
    }
}

render('login', [
    'email' => $email,
    'error' => $error
]);