-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 juin 2023 à 16:02
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `patisserie`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Idadmin` varchar(20) NOT NULL,
  `Nomadmin` varchar(30) NOT NULL,
  `prenomadmin` varchar(30) NOT NULL,
  `Emailadmin` varchar(30) NOT NULL,
  `passwordadmin` varchar(30) NOT NULL,
  PRIMARY KEY (`Idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Idadmin`, `Nomadmin`, `prenomadmin`, `Emailadmin`, `passwordadmin`) VALUES
('A001', 'Haj', 'L3tmani', 'HajL3tmani@gmail.com', '123'),
('A002', 'Sidi', 'khalkhal', 'Sidikhalkhal@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `idproduit` int NOT NULL,
  `idclient` int NOT NULL,
  `Id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`idproduit`, `idclient`, `Id`) VALUES
(3, 3, 1),
(3, 3, 2),
(3, 3, 3),
(3, 3, 4),
(3, 3, 5),
(3, 2, 20),
(2, 2, 19),
(2, 2, 18);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Idclient` int NOT NULL AUTO_INCREMENT,
  `Nomclient` varchar(30) NOT NULL,
  `Prenomclient` varchar(30) NOT NULL,
  `Adresseclient` varchar(30) NOT NULL,
  `Emailclient` varchar(30) NOT NULL,
  `Passwordclient` varchar(30) NOT NULL,
  `DateNaissance` date NOT NULL,
  `ville` varchar(20) NOT NULL,
  `nombre` int NOT NULL,
  PRIMARY KEY (`Idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Idclient`, `Nomclient`, `Prenomclient`, `Adresseclient`, `Emailclient`, `Passwordclient`, `DateNaissance`, `ville`, `nombre`) VALUES
(1, 'ahmed', 'bolaya', 'hay bitala', 'ahmed@gmail.com', '123', '0000-00-00', 'tanger', 606060660),
(2, 'elkanbouji', 'adnane', 'hay berchifa', 'adnane@gmail.com', '112233', '0000-00-00', 'tanger', 606060660),
(3, 'xliya7', 'adam', 'jewgjygdjydwa', 'adam@gmail.com', '2345', '0000-00-00', 'tanger', 606060660),
(4, 'xliya7', 'adam', 'jewgjygdjydwa', 'adam@Gmail.Com', '123', '2023-06-12', 'tanger', 60060606);

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

DROP TABLE IF EXISTS `command`;
CREATE TABLE IF NOT EXISTS `command` (
  `Idcommande` int NOT NULL AUTO_INCREMENT,
  `datecommande` date NOT NULL,
  `Prixcommand` int NOT NULL,
  `Adresselivraison` varchar(100) NOT NULL,
  `Idclient` int NOT NULL,
  PRIMARY KEY (`Idcommande`),
  KEY `Idclient` (`Idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`Idcommande`, `datecommande`, `Prixcommand`, `Adresselivraison`, `Idclient`) VALUES
(1, '0000-00-00', 234, 'hay bitala', 2),
(2, '2023-06-12', 234, 'hay msnana', 2),
(3, '2023-06-12', 111, 'hay msnana', 2),
(4, '2023-06-16', 234, 'hay msnana', 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Idproduit` int NOT NULL AUTO_INCREMENT,
  `Idadmin` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'A001',
  `Nomproduit` varchar(30) NOT NULL,
  `Prix` int NOT NULL,
  `Quantite` int NOT NULL,
  `photo` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  PRIMARY KEY (`Idproduit`,`Idadmin`),
  KEY `Idadmin` (`Idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Idproduit`, `Idadmin`, `Nomproduit`, `Prix`, `Quantite`, `photo`, `Description`) VALUES
(2, 'A001', 'n1', 111, 123, 'images/p1', 'good'),
(3, 'A001', 'paint', 12, 2, 'images/p2', 'yes'),
(4, 'A002', 'n2', 15, 2, 'images/p3', 'non'),
(6, 'A002', 'n2', 111, 2, 'images/p4', 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `produit-command`
--

DROP TABLE IF EXISTS `produit-command`;
CREATE TABLE IF NOT EXISTS `produit-command` (
  `Idcommande` int NOT NULL,
  `Idproduit` int NOT NULL,
  KEY `Idcommande` (`Idcommande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`Idadmin`) REFERENCES `admin` (`Idadmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
