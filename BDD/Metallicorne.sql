-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 02 Décembre 2016 à 00:14
-- Version du serveur :  5.5.53-0+deb8u1
-- Version de PHP :  5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `Metallicorne`
--

-- --------------------------------------------------------

--
-- Structure de la table `camp`
--

CREATE TABLE IF NOT EXISTS `camp` (
`ID_Camp` smallint(6) NOT NULL,
  `Nom_Camp` varchar(100) NOT NULL,
  `Adresse_Camp` varchar(250) NOT NULL,
  `Ville_Camp` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `camp`
--

INSERT INTO `camp` (`ID_Camp`, `Nom_Camp`, `Adresse_Camp`, `Ville_Camp`) VALUES
(1, 'Jungle', '45 rue du bled', 'Paris'),
(2, 'Paradis', '87 rue de la Paix', 'Calai');

-- --------------------------------------------------------

--
-- Structure de la table `Proposition`
--

CREATE TABLE IF NOT EXISTS `Proposition` (
  `ID_Cp` smallint(6) NOT NULL,
  `ID_Ser` smallint(6) NOT NULL,
  `HeureDeb` time DEFAULT NULL,
  `HeureFin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`ID_Service` smallint(6) NOT NULL,
  `Nom_Service` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`ID_Service`, `Nom_Service`, `Description`) VALUES
(1, 'WIFI', 'Permet une connexion à internet gratuitement sur l''ensemble du site.'),
(3, 'Traducteur', 'Des traducteurs sont disponible pour aider les réfugiés à communiquer avec les administrations. '),
(6, 'Education', 'Des cours sont proposé aux personnes pour apporté un soutient éducatif. '),
(7, 'Sanitaires', 'Installations et appareils destinés aux soins de propreté et d''hygiène.'),
(8, 'Santé', 'Des médecins, infirmières, médicaments et tout autres services de santé. '),
(9, 'Administration', 'Aide administrative et juridique. ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `camp`
--
ALTER TABLE `camp`
 ADD PRIMARY KEY (`ID_Camp`);

--
-- Index pour la table `Proposition`
--
ALTER TABLE `Proposition`
 ADD PRIMARY KEY (`ID_Cp`,`ID_Ser`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`ID_Service`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `camp`
--
ALTER TABLE `camp`
MODIFY `ID_Camp` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
MODIFY `ID_Service` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
