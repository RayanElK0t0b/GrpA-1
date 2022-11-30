-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 30 nov. 2022 à 11:44
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `grpa-1`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `object` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `id_projet` int(11) NOT NULL,
  `img_url` text NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_image`, `id_projet`, `img_url`) VALUES
(1, 1, 'img/canalbanner.jpg'),
(2, 1, 'img/realisation.jpg'),
(3, 1, 'img/soundengineering.jfif'),
(4, 2, 'img/marvelbanner.jpg'),
(5, 2, 'img/3dmodeling.jfif'),
(6, 2, 'img/studiolighting.jfif'),
(7, 3, 'img/chch.jpg'),
(8, 3, 'img/videoediting.jpg'),
(9, 3, 'img/graphicdesigning.jfif');

-- --------------------------------------------------------

--
-- Structure de la table `paragraphes`
--

DROP TABLE IF EXISTS `paragraphes`;
CREATE TABLE IF NOT EXISTS `paragraphes` (
  `id_paragraphe` int(11) NOT NULL AUTO_INCREMENT,
  `id_projet` int(11) NOT NULL,
  `paragraphe` text NOT NULL,
  PRIMARY KEY (`id_paragraphe`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paragraphes`
--

INSERT INTO `paragraphes` (`id_paragraphe`, `id_projet`, `paragraphe`) VALUES
(1, 1, 'They are the first television company in numbers of sucribers and brand image in France. They offer a diversified service going from sports to series and movies. service going from sports to series and movies.'),
(2, 1, 'From October 2009 to August 2014 RKGR was working with the realisation and soundengeneering of Canal+ adjusting sound of series and setting up studio for tv shows.'),
(3, 1, 'The director of realization is responsible for directing a film or television program. He has a creative, management and technical and artistic role. Realizing TV shows was pretty challenging at first, but learning those skills was very rewarding. '),
(4, 1, 'A sound engineer is responsible for the technical side of a recording or live performance. The sound engineer designs and manages sound levels and outputs, and is responsible for maintaining the physical sound equipment, like amps and microphones. '),
(5, 2, 'The biggest movie company in the world father of a lot of movies and fan groups From fantasie like Jurrasic Park to real story as Into the Wild. '),
(6, 2, 'From August 2014 to May 2019 RKGR was working and learning from Marvel employees for adjusting light in the studio and how to create 3D model on After Effect.'),
(7, 2, 'Based on a brief and/or concept art, 3D modelers digitally build, sculpt, and add detail to 3D characters, props, vehicles, and sets, often referred to as assets. As a base, 3D modelers are often provided with a scan of a prop, character, or vehicle from the live-action shoot, or a third-party site such as MegaScans. The toughest challenge was to produce great physics for the asteroïds gravity'),
(8, 2, 'Lighting artists use light to enhance the atmosphere, tone, depth and mood of a scene. They input different light effects depending on the factors in a frame or scene, such as the weather or the time of day. They make it clear where the light sources are meant to be in a scene.'),
(9, 3, 'He is the rising star of Youtube. MrBeast is the first content creator to reach the tremendous numbers he has today in such a short period of time. '),
(10, 3, 'From May 2019 to August 2022, RKGR was in charge of the Graphic Designing Team to produce logos and assets for MrBeast as well as directing the Editing of his videos.'),
(11, 3, 'As a film/video editor, you will manage material such as camera footage, dialogue, sound effects, graphics and special effects to produce a final film or video product. This is a key role in the post-production process and your skills can determine the quality and delivery of the finished result. '),
(12, 3, 'The Graphic Designer job description includes the entire process of defining requirements, visualizing and creating graphics including illustrations, logos, layouts and photos. You will be the one to shape the visual aspects of websites, books, magazines, product packaging, exhibitions and more. ');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id_projet` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `textes`
--

DROP TABLE IF EXISTS `textes`;
CREATE TABLE IF NOT EXISTS `textes` (
  `id-text` int(11) NOT NULL AUTO_INCREMENT,
  `id-projet` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id-text`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `textes`
--

INSERT INTO `textes` (`id-text`, `id-projet`, `text`) VALUES
(1, 1, 'Canal+'),
(2, 1, '23,9m suscribers in 2022'),
(3, 1, '9,6m sucribers in France'),
(4, 1, '~45 channels'),
(5, 1, '2873m euro in 2022'),
(6, 1, 'Part of realisation and sound engeneering'),
(7, 1, 'Realization Director'),
(8, 1, 'Leading Sound Engineering'),
(9, 2, 'Marvel'),
(10, 2, 'Most Famous Super Hero'),
(11, 2, 'More than 8000 unique caracters'),
(12, 2, '29 different series'),
(13, 2, 'The most known movie companie on earth'),
(14, 2, 'Help with 3D modeling and studio lighting'),
(15, 2, '3D Modeling'),
(16, 2, 'Lighting Experts'),
(17, 3, 'MrBeast'),
(18, 3, '106M subscribers on Youtube'),
(19, 3, '17B views on main Youtube channel'),
(20, 3, '729 videos in total'),
(21, 3, '7th world youtuber'),
(22, 3, 'Head of the Video Editing and the Graphic Designing Departments'),
(23, 3, 'Video Editing Section'),
(24, 3, 'Graphic Designing');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `first_name` int(11) NOT NULL,
  `last_name` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
