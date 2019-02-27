-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 fév. 2019 à 19:33
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p5`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `content` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom`, `date_creation`, `lieu`, `date_debut`, `date_fin`, `content`) VALUES
(13, 'Â« AutoritÃ© Ã©ducative Â», avec Bruno ROBBES et lâ€™ICEM 71 (GEM 71)', '2019-01-09', 'Chalon sur SaÃ´ne', '2019-01-09 00:00:00', '2019-01-09 00:00:00', 'ratertyu'),
(14, 'Le handicap Ã  l\'Ã©cole', '2018-12-19', 'Chalon sur SaÃ´ne', '2019-02-20 00:00:00', '2019-02-22 00:00:00', ''),
(15, 'Apprendre Ã  apprendre', '2018-12-19', 'MÃ¢con', '2018-12-19 16:36:26', '2018-12-19 16:36:26', ''),
(17, 'Â« Entrer dans Le langage Ã©crit en maternelle Â», avec VÃ©ronique BOIRON', '2019-01-09', 'Chalon sur SaÃ´ne', '2019-01-09 18:09:34', '2019-01-09 18:09:34', '');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` tinyint(4) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `lieu_travail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(3, 'root', '$2y$10$679iC.6Suww6wZj3dOrGo.gp1GeeMsk.C65u7z98HiTZ3PeSqOi3e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
