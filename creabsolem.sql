-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 juin 2020 à 00:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `creabsolem`
--

-- --------------------------------------------------------

--
-- Structure de la table `creation`
--

DROP TABLE IF EXISTS `creation`;
CREATE TABLE IF NOT EXISTS `creation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creaTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `creaDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `creation`
--

INSERT INTO `creation` (`id`, `img`, `creaTitle`, `creaDescription`, `createdAt`) VALUES
(1, 'boite1.jpg', 'Ma première boite !', 'la première boite que j\'ai faite', '2020-06-19 00:00:00'),
(2, 'boite2.jpg', 'une boite plus sobre', 'Inspiration plus gothique, cette boite se caractérise par son blabla', '2020-06-20 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `evenementTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `evenementContent` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`evenementTitle`, `evenementContent`) VALUES
('Où me retrouver ?', 'Ici la liste des salons et conventions où vous pourrez me retrouver a un stand où en vadrouille pour échanger où découvrir mes créations !');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `newsTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `newsContent` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`newsTitle`, `newsContent`) VALUES
('Actu et nouveautés', 'Ici je pourrais vous communiquer mon actualité, mes inspirations, mes nouveaux projets, et aussi quand je prends des pauses pour me consacrer a autre chose.');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `PresentationTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PresentationContent` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`PresentationTitle`, `PresentationContent`) VALUES
('Texte de présentation', 'Bonjour bienvenue sur le site des créations d\'Absolem, vous y retrouverez les dernières créations de l\'atelier, des infos, ainsi que des tutoriels sur la manière de travailler certains matériaux. ');

-- --------------------------------------------------------

--
-- Structure de la table `tuto`
--

DROP TABLE IF EXISTS `tuto`;
CREATE TABLE IF NOT EXISTS `tuto` (
  `tutoTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutoText` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tuto`
--

INSERT INTO `tuto` (`tutoTitle`, `tutoText`, `createdAt`) VALUES
('Mon premier tuto !', 'Mon tout premier tutoriel sur comment faire des boites.', '2020-06-20 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userStatut` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `username`, `email`, `password`, `userStatut`) VALUES
(1, 'ADMINISTRATOR', 'admin@creabsolem.fr', 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
