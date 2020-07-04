-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 06 fév. 2020 à 07:03
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
-- Base de données :  `stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `cin`, `nom`, `prenom`, `profession`, `password`) VALUES
(1, 12345678, 'admin', 'root', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `cin` int(8) NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `institut` varchar(255) NOT NULL,
  `type_stage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `nom`, `prenom`, `cin`, `specialite`, `date_debut`, `date_fin`, `institut`, `type_stage`) VALUES
(19, 'AA', 'BB', 123456789, 'RSI', '2020-01-30', '2020-01-31', 'ISET', 'pfe'),
(18, 'AA', 'BB', 123456789, 'RSI', '2020-01-30', '2020-01-31', 'ISET', 'pfe');

-- --------------------------------------------------------

--
-- Structure de la table `etat_demande_stage`
--

DROP TABLE IF EXISTS `etat_demande_stage`;
CREATE TABLE IF NOT EXISTS `etat_demande_stage` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etat_demande_stage`
--

INSERT INTO `etat_demande_stage` (`id`, `cin`, `etat`) VALUES
(11, 72324567, 'en attente'),
(10, 1235680, 'accepte'),
(9, 123456789, 'rejetÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `sexe` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `cin`, `nom`, `prenom`, `tel`, `email`, `password`, `profession`, `sexe`) VALUES
(1, 12345678, 'AA', 'BB', '12345678','aa@gmail.com', '123', 'etudiant', 'femme'),
(4, 12345678, 'rouge', 'BB', '12345567', 'aa@gmail.com', '1233', 'etudiant', 'femme');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
