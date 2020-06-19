<?php 

// Définition de constantes de configuration
define('BDD_HOST', 'localhost');
define('BDD_NAME', 'creabsolem');
define('BDD_USER', 'root');
define('BDD_PASSWORD', 'Rowenda');

define('ROOT_DIR', __DIR__);
define('PUBLIC_DIR', ROOT_DIR . '/www');
define('VIEWS_DIR', ROOT_DIR . '/views');
define('SRC_DIR', ROOT_DIR . '/src');

// Si on passe par le localhost, il faut ajouter tout le chemin dans les URLs
if ($_SERVER['HTTP_HOST'] === 'localhost' 
 || $_SERVER['HTTP_HOST'] === '127.0.0.1') 
{
    define('BASE_URL', '/www');
}

// Si on est sur le virtual host on ne doit pas mettre le chemin
else {
    define('BASE_URL', '');
}
