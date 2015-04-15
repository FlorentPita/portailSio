-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 07 Novembre 2014 à 11:22
-- Version du serveur: 5.5.38-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `halloween`
--

-- --------------------------------------------------------

--
-- Structure de la table `Classe`
--

CREATE TABLE IF NOT EXISTS `Classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `Classe`
--

INSERT INTO `Classe` (`id`, `label`) VALUES
(2, 'SIO22'),
(3, 'SIO21');

-- --------------------------------------------------------

--
-- Structure de la table `Eleve`
--

CREATE TABLE IF NOT EXISTS `Eleve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe_id` int(11) DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2D602AF38F5EA509` (`classe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `Eleve`
--

INSERT INTO `Eleve` (`id`, `classe_id`, `nom`, `prenom`) VALUES
(1, 2, 'Savona', 'Nicolas'),
(2, 2, 'Rabineau', 'Cyril'),
(3, 2, 'Pros', 'Jerome'),
(4, 2, 'Cousin', 'Benoit'),
(5, 2, 'Mathon', 'Maxime'),
(6, 2, 'Mariapanne', 'Charles'),
(7, 2, 'Dupuis', 'Quentin'),
(8, 2, 'Pera', 'Ludovic');

-- --------------------------------------------------------

--
-- Structure de la table `Professeur`
--

CREATE TABLE IF NOT EXISTS `Professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `Professeur`
--

INSERT INTO `Professeur` (`id`, `login`, `password`, `nom`, `prenom`) VALUES
(1, 'kpu', 'sio22', 'Capuozzo', 'Olivier'),
(2, 'sio22', 'sio22', 'Sio', '22');

-- --------------------------------------------------------

--
-- Structure de la table `professeur_classe`
--

CREATE TABLE IF NOT EXISTS `professeur_classe` (
  `professeur_id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL,
  PRIMARY KEY (`professeur_id`,`classe_id`),
  KEY `IDX_38ABBDC6BAB22EE9` (`professeur_id`),
  KEY `IDX_38ABBDC68F5EA509` (`classe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `professeur_classe`
--

INSERT INTO `professeur_classe` (`professeur_id`, `classe_id`) VALUES
(1, 2),
(1, 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Eleve`
--
ALTER TABLE `Eleve`
  ADD CONSTRAINT `FK_2D602AF38F5EA509` FOREIGN KEY (`classe_id`) REFERENCES `Classe` (`id`);

--
-- Contraintes pour la table `professeur_classe`
--
ALTER TABLE `professeur_classe`
  ADD CONSTRAINT `FK_38ABBDC68F5EA509` FOREIGN KEY (`classe_id`) REFERENCES `Classe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_38ABBDC6BAB22EE9` FOREIGN KEY (`professeur_id`) REFERENCES `Professeur` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
