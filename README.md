# Absolem

#Informations générales:

Les créations d'Absolem.
Ce projet a pour but de mettre en ligne un site vitrine pour des créations artisanales.
Le site a terme permettra aux utilisateurs de communiquer avec le client, de voir ses oeuvres et de lire ses billets ainsi que de les commenter.
Le site permettra au client de mettre a jour toutes ses infos de manière autonome et de gérer chacun des éléments qu'il crééera ainsi que ses utilisateurs.
Le site utilisera une authentification pour permettre aux membres d'agir sur les publications (de manière limitées) et l'authentification administrateur donnera accés a la page d'administrateur (en cours de production).


#Demarrage:

Créez un dossier Creabsolem dans lequel importez l'ensemble des éléments.

Veuillez respecter l'arborescence des fichiers:
->Creabsolem/

-->src/

-->vendor/

-->views/

-->www/

Veuillez installez la base de donnée creabsolem.sql sur votre gestionnaire de base de donnée.
Pensez a mettre a jour le fichier config-example.php et renommez le en config.php (où pensez a renommer les liens des inclusions tout en haut des fichiers du dossier www/)
Créez votre serveur virtuel et faites le pointer sur le dossier "creabsolem/www/", voilà vous pouvez travailler sur ce projet en localhost.

#Auteurs:

Giorgi Baptiste.

#License:
Utilisation permise aux membres du GRETA Provence.


#API et objets:

On utilise l'objet PDO de PHP dans les pages php du dossier www/ pour se connecter a la base de données (passage en classe pour grouper l'utilisation en production)


#Architecture:

Le dossier www/ contient les fichiers php responsable de l'affichage dynamique des pages du site et chargées d'en gérer la fonctionnalitée.
Dans le dossier views/ vous retrouverez tout les templates en phtml correspondant au code d'affichage des pages, les noms correspondent au fichier php auquel ils sont rattachés.
Dans le dossier src/ se trouve la page function.php chargée de regrouper les outils indispensable au site.
