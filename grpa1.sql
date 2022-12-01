-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 18:58
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpa1`
--

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `carousel_img_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `img_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `carousel`
--

INSERT INTO `carousel` (`carousel_img_id`, `project_id`, `img_url`) VALUES
(1, 1, 'img/canalcarousel.jpg'),
(2, 2, 'img/endgamecarousel.jpg'),
(3, 3, 'img/mrbeastcarousel.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `object` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `title` varchar(200) NOT NULL,
  `navbarsec1` varchar(200) NOT NULL,
  `navbarsec2` varchar(200) NOT NULL,
  `parallax` varchar(200) NOT NULL,
  `h1` varchar(200) NOT NULL,
  `sec1` varchar(200) NOT NULL,
  `nom1` varchar(200) NOT NULL,
  `comp1` varchar(200) NOT NULL,
  `desc1` text NOT NULL,
  `nom2` varchar(200) NOT NULL,
  `comp2` varchar(200) NOT NULL,
  `desc2` text NOT NULL,
  `sec2` varchar(200) NOT NULL,
  `txtsec2` text NOT NULL,
  `footertxt` text NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `home`
--

INSERT INTO `home` (`title`, `navbarsec1`, `navbarsec2`, `parallax`, `h1`, `sec1`, `nom1`, `comp1`, `desc1`, `nom2`, `comp2`, `desc2`, `sec2`, `txtsec2`, `footertxt`, `logo`) VALUES
('RKGR', 'About us', 'Projects', 'img/videoeditor.webp', 'R.KOTOB & G.REBOUL EDITING', 'ABOUT US', 'Rayan Kotob', 'Video Editor\r\n3D Modeling\r\nGraphic Designer', '"I am editing videos when i should edit my life."--Kotob Rayan--2022\r\nrelkotob@gaming.tech\r\nTinder : RayouLeBG(vraiment très beau', 'Gwen Reboul', 'Sound Engineer\r\nLighting Expert\r\nRealizer', '"Life is like a movie: not everyone have a happy ending"--Reboul Gwen--2022\r\ngreboul@gaming.tech\r\nOnlyFan : ChadGwen_', 'OUR PROJECTS', 'We worked with the best. We offer the best.', '© 2022 Copyright Text\r\nAll Rights Reserved', 'img/logo_small.png');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
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

CREATE TABLE `paragraphes` (
  `id_paragraphe` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `paragraphe` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `paragraphes`
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

CREATE TABLE `projets` (
  `id_projet` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `name`) VALUES
(1, 'Canal'),
(2, 'Marvel'),
(3, 'MrBeast');

-- --------------------------------------------------------

--
-- Structure de la table `textes`
--

CREATE TABLE `textes` (
  `id_text` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `textes`
--

INSERT INTO `textes` (`id_text`, `id_projet`, `text`) VALUES
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

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `first_name`, `last_name`, `admin`) VALUES
('Rayouyou', 'relkotob@gaming.tech', 'motdepasse123', 'Rayan', 'Kotob', 1),
('Perlainpin', 'greboul@gaming.tech', 'motdepasse123', 'Gwen', 'Reboul', 1),
('AhOui', 'email1@gaming.tech', 'motdepasse1234', 'Joris', 'Boris', 0),
('Daccor', 'email2@gaming.tech', 'motdepasse1235', 'Doron', 'Boron', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_img_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `paragraphes`
--
ALTER TABLE `paragraphes`
  ADD PRIMARY KEY (`id_paragraphe`);

--
-- Index pour la table `textes`
--
ALTER TABLE `textes`
  ADD PRIMARY KEY (`id_text`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `paragraphes`
--
ALTER TABLE `paragraphes`
  MODIFY `id_paragraphe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `textes`
--
ALTER TABLE `textes`
  MODIFY `id_text` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
