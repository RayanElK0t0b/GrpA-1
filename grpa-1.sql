-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 28 Novembre 2022 à 10:25
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gta - 1`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `email` varchar(80) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `phone number` int(10) NOT NULL,
  `objet` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `Username` varchar(60) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `date` date NOT NULL,
  `temps` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sign up`
--

CREATE TABLE `sign_up` (
  `Username` varchar(60) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(80) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`,`Password`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Index pour la table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`Username`,`Password`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `sign_up` (`Username`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`email`) REFERENCES `sign_up` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
