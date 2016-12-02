-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 02 Décembre 2016 à 04:42
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
  `Ville_Camp` varchar(250) NOT NULL,
  `Telephone` varchar(11) NOT NULL,
  `localisation` varchar(1000) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `camp`
--

INSERT INTO `camp` (`ID_Camp`, `Nom_Camp`, `Adresse_Camp`, `Ville_Camp`, `Telephone`, `localisation`) VALUES
(1, 'Jungle', '45 rue du bled', 'Yves', '+3332281257', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2768.8171715941376!2d-1.0839665843254223!3d46.05474487911235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48014ff45de63abb%3A0xb5de3dcab35851e8!2s45+Rue+du+Bled%2C+17340+Yves!5e0!3m2!1sfr!2sfr!4v1480649815598" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(2, 'Paradis', '87 rue de la Paix', 'Calais', '+3344524865', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.0957849119472!2d1.8504224157995899!3d50.95893327954872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc3f9f7e7f6b31%3A0x110dee026847e388!2s87+Rue+de+la+Paix%2C+62100+Calais!5e0!3m2!1sfr!2sfr!4v1480649863677" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(3, 'Deleck', '63 rue du champ des oiseaux', 'Rouen', '+3365484326', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2593.781993369908!2d1.0934702157467326!3d49.45083727934992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0ddd1cf862289%3A0x2e7224d710573bb0!2s63+Rue+du+Champ+des+Oiseaux%2C+76000+Rouen!5e0!3m2!1sfr!2sfr!4v1480649972554" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');

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

--
-- Contenu de la table `Proposition`
--

INSERT INTO `Proposition` (`ID_Cp`, `ID_Ser`, `HeureDeb`, `HeureFin`) VALUES
(1, 6, '08:00:00', '19:00:00'),
(1, 7, '08:00:00', '19:00:00'),
(1, 8, '08:00:00', '19:00:00'),
(2, 1, '09:00:00', '15:00:00'),
(2, 8, '08:00:00', '19:00:00');

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
MODIFY `ID_Camp` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
MODIFY `ID_Service` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
