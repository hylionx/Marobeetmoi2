-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 juin 2020 à 22:11
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marobeetmoi2`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL DEFAULT '',
  `admin` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `ville`, `cp`, `adresse`, `email`, `password`, `token`, `admin`) VALUES
(1, 'Boudahba', 'Hylia', 'Tourcoing', '59200', '9 rue kellermann', 'hylia.boudahba@gmail.com', 'ab4f63f9ac65152575886860dde480a1', 'f333urrtcc34eh2u380ep9yr2wr3s7k4bexqwchhv744fqge26lul3s1t5ts4c37sjns6982si1um1845237emsmah269gfbfu9a', '1');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `telephone`, `message`) VALUES
(9, 'gg', 'jj', 'jj', 'jj'),
(11, 'boudahba hylia', 'hylia.boudahba@gmail.com', '0769685084', 'BONJOUR TOI');

-- --------------------------------------------------------

--
-- Structure de la table `robes`
--

DROP TABLE IF EXISTS `robes`;
CREATE TABLE IF NOT EXISTS `robes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `taille` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `robes`
--

INSERT INTO `robes` (`id`, `nom`, `image`, `description`, `taille`, `prix`, `type`) VALUES
(1, 'Caftan brocard', 'img1.jpg', 'Robe brocard pour marié, idéale au moment de la pièce montée\r\n\r\n\r\n', 40, 200, 'm'),
(2, 'Caftan dentelle', 'img2.jpg', 'Caftan dentelle rose pour marié nouveau modèle\r\n\r\n', 40, 150, 'm'),
(3, 'Robe Amira Lebsatte', 'img3.jpg', 'Robe violette d\'une grande couturière amira lebsatte\r\n\r\n', 38, 250, 'm'),
(4, 'Robe satin ', 'img4.jpg', 'Robe satin rose modèle invité très classe\r\n\r\n', 36, 90, 'inv'),
(5, 'Robe bordeau', 'img5.jpg', 'Robe bordeau simple modèle invité à petit prix\r\n\r\n', 44, 100, 'inv');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
