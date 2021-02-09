-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 09 fév. 2021 à 12:54
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_daaradji`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `daara` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `sit_matrimoniale` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `niveau_etude` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `arabe` varchar(255) NOT NULL,
  `coranique` varchar(255) NOT NULL,
  `khassaide` varchar(255) NOT NULL,
  `dine` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`ID`, `prenom`, `nom`, `daara`, `matricule`, `sexe`, `date_naissance`, `lieu_naissance`, `adresse`, `sit_matrimoniale`, `telephone`, `cin`, `email`, `profession`, `niveau_etude`, `diplome`, `activite`, `fonction`, `arabe`, `coranique`, `khassaide`, `dine`) VALUES
(1, 'test', 'test', 'Thies', 'test', 'masculin', '2000-03-31', 'Thies', 'DAKAR', 'choix1', '77777777', '0619198904925', 'houmarkara@gmail.com', 'INformaticien', 'Master ', 'Master 2', 'oui', 'Informaticien', 'Lu', 'Bien', 'Moyen', 'Moyen');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `daara` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_naissance` varchar(255) NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `sit_matrimoniale` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `niveau_etude` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `arabe` varchar(255) NOT NULL,
  `coranique` varchar(255) NOT NULL,
  `khassaide` varchar(255) NOT NULL,
  `dine` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`ID`, `prenom`, `nom`, `daara`, `matricule`, `sexe`, `date_naissance`, `lieu_naissance`, `adresse`, `sit_matrimoniale`, `telephone`, `cin`, `email`, `profession`, `niveau_etude`, `diplome`, `activite`, `fonction`, `arabe`, `coranique`, `khassaide`, `dine`) VALUES
(1, 'Omar', 'SANE', 'ThiÃ¨s', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Omar', 'Fall', 'Parcelles', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Omar', 'Testt', 'Keur Massar', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'yaye', 'Nene', 'Thies', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Test4', 'Test4', 'Thies', 'TH0001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Omar', 'Sane', 'Thies', 'TH0001', 'masculin', '2222-02-22', 'Thies', 'DAKAR', 'choix1', '77777777', '0619198904925', '', '', '', '', '', '', '', '', '', ''),
(7, 'TestALL', 'TestALL', 'Parcelles', 'TestALL', 'masculin', '2222-12-11', 'TestALL', 'TestALL', 'marier', '77777777', '0619198904925', 'houmarkara@gmail.com', 'TestALL', 'TestALL', 'Master 2', 'oui', 'Informaticien', 'Lu', 'Moyen', 'Bien', 'Moyen');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'aminekouis@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(2, 'aaa', 'aaaaa@gmail.com', 'ed02457b5c41d964dbd2f2a609d63fe1bb7528dbe55e1abf5b52c249cd735797'),
(3, 'bb', 'bb@gmail.com', '3b64db95cb55c763391c707108489ae18b4112d783300de38e033b4c98c3deaf'),
(4, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce'),
(5, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce'),
(6, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce'),
(7, 'omar', 'omar@omar.sane', 'd812e1e2525233644d5c2119655ffe27722b602b433544f2cef9ab0ffdf861b9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
