-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 28 oct. 2020 à 12:14
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
-- Base de données :  `training_success`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

DROP TABLE IF EXISTS `absence`;
CREATE TABLE IF NOT EXISTS `absence` (
  `id_abs` int(11) NOT NULL AUTO_INCREMENT,
  `nbr_h` varchar(200) NOT NULL,
  `dateabs` date NOT NULL,
  `id_studentd` int(11) DEFAULT NULL,
  `id_studentt` int(11) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_abs`),
  KEY `fk_studentt` (`id_studentt`),
  KEY `fk_idprof` (`id_prof`),
  KEY `fk_studentd` (`id_studentd`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`id_abs`, `nbr_h`, `dateabs`, `id_studentd`, `id_studentt`, `id_prof`) VALUES
(15, '3 ', '2020-07-01', 14, NULL, NULL),
(16, '2', '2020-07-13', 15, NULL, NULL),
(17, '1', '2020-07-08', NULL, NULL, 8),
(19, '12', '2020-07-08', 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `groupid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `fullname`, `groupid`) VALUES
(1, 'bilal', '7c878f9f33dcb1bba880b03ff9232258400fb283', 'aminechakker19@gmail.com', 'Amine chakker1', 1),
(2, 'fouad123', 'f46385a72c373e3c0bec59724f06547dd3208337', 'fouad@gmail.com', 'fouad', 1);

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

DROP TABLE IF EXISTS `attestation`;
CREATE TABLE IF NOT EXISTS `attestation` (
  `id_attest` int(11) NOT NULL AUTO_INCREMENT,
  `attestation` varchar(200) NOT NULL,
  `id_t_student` int(11) DEFAULT NULL,
  `id_d_student` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_attest`),
  KEY `fk_diplome` (`id_d_student`),
  KEY `fk_training` (`id_t_student`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `attestation`
--

INSERT INTO `attestation` (`id_attest`, `attestation`, `id_t_student`, `id_d_student`) VALUES
(6, 'fORMATION.pdf', 15, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact_visiteur`
--

DROP TABLE IF EXISTS `contact_visiteur`;
CREATE TABLE IF NOT EXISTS `contact_visiteur` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_username` varchar(30) NOT NULL,
  `contact_email` varchar(70) NOT NULL,
  `contact_tele` varchar(50) NOT NULL,
  `contact_sujet` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact_visiteur`
--

INSERT INTO `contact_visiteur` (`contact_id`, `contact_username`, `contact_email`, `contact_tele`, `contact_sujet`) VALUES
(52, 'visiteur', 'visiteur@gmail.com', '0633789435', 'visiteur Message'),
(51, 'ahlam saidi', 'ahlam@gmail.com', '0612345678', 'Bonjour Je vais Payer en ligne ! ');

-- --------------------------------------------------------

--
-- Structure de la table `diplome_formation_inscription`
--

DROP TABLE IF EXISTS `diplome_formation_inscription`;
CREATE TABLE IF NOT EXISTS `diplome_formation_inscription` (
  `id_inscription` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `niveau` int(11) NOT NULL,
  `filliere` int(11) NOT NULL,
  PRIMARY KEY (`id_inscription`),
  KEY `fk_niv_insc_d` (`niveau`),
  KEY `fk_fil_insc_d` (`filliere`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `diplome_formation_inscription`
--

INSERT INTO `diplome_formation_inscription` (`id_inscription`, `nom`, `prenom`, `email`, `telephone`, `niveau`, `filliere`) VALUES
(8, 'asda', 'asda', 'dasda@gmail.com', '0633789435', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `diplome_student`
--

DROP TABLE IF EXISTS `diplome_student`;
CREATE TABLE IF NOT EXISTS `diplome_student` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `niveau` int(11) NOT NULL,
  `filliere` int(11) NOT NULL,
  PRIMARY KEY (`id_student`),
  KEY `fk_niv_d` (`niveau`),
  KEY `fk_fil_d` (`filliere`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `diplome_student`
--

INSERT INTO `diplome_student` (`id_student`, `Nom`, `Prenom`, `Email`, `username`, `Password`, `niveau`, `filliere`) VALUES
(14, 'ikram', 'elintissar', 'ikram@gmail.com', 'ikram', 'ikram', 2, 3),
(15, 'salma', 'salma', ' salma@gmail.com', 'salma', 'salma', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id_doc` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `document` varchar(200) NOT NULL,
  `filliere` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  `matiere` int(11) NOT NULL,
  PRIMARY KEY (`id_doc`),
  KEY `doc-fil` (`filliere`),
  KEY `doc-niv` (`niveau`),
  KEY `doc-matiere` (`matiere`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`id_doc`, `titre`, `document`, `filliere`, `niveau`, `matiere`) VALUES
(3, 'bla bla', 'aminecv.pdf', 1, 3, 8),
(5, 'cv', 'aminecv.pdf', 1, 2, 8),
(6, 'html5/css3/javascript', '11.pdf', 1, 2, 8),
(7, 'linux', 'AMINE CHAKKER.pdf', 2, 3, 9);

-- --------------------------------------------------------

--
-- Structure de la table `dp`
--

DROP TABLE IF EXISTS `dp`;
CREATE TABLE IF NOT EXISTS `dp` (
  `id_db` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id_db`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dp`
--

INSERT INTO `dp` (`id_db`, `nom`, `prenom`, `email`, `username`, `password`) VALUES
(3, 'Amine', 'Chakker', 'aminechakker18@gmail.com', 'amine123', 'amine123'),
(4, 'sanae', 'karbous', 'sanaekarbous@gmail.com', 'sanaekarbous', 'sanaekarbous');

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

DROP TABLE IF EXISTS `filieres`;
CREATE TABLE IF NOT EXISTS `filieres` (
  `id_fil` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filieres`
--

INSERT INTO `filieres` (`id_fil`, `nom`) VALUES
(1, 'Developpement informatique'),
(2, 'Reseau informatique '),
(3, 'Design');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id_module` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `dure` varchar(100) NOT NULL,
  `id_fil` int(11) NOT NULL,
  `id_niv` int(11) NOT NULL,
  PRIMARY KEY (`id_module`),
  KEY `fk_fil` (`id_fil`),
  KEY `fk_niv` (`id_niv`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id_module`, `nom`, `dure`, `id_fil`, `id_niv`) VALUES
(8, 'PHP/MYSQL', '3 mois', 1, 2),
(9, 'linux', '3 mois', 2, 3),
(10, 'Art Graphique', '1 mois', 3, 1),
(13, 'Outils Multimedia (Son, VidÃ©o et 3D)', '1 mois', 1, 2),
(14, 'Programmation OrientÃ©e Objet Java', '1 mois', 1, 2),
(15, 'Administrer une base de donnÃ©es Microsoft SQL Server 2012', '1 mois', 1, 2),
(16, 'UML', '1 mois', 1, 1),
(19, 'html5/css3/javascript', '3 mois', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `id_niv` int(11) NOT NULL AUTO_INCREMENT,
  `Niveau` varchar(200) NOT NULL,
  PRIMARY KEY (`id_niv`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id_niv`, `Niveau`) VALUES
(1, 'bac +2'),
(2, 'bac +3'),
(3, 'bac +4'),
(4, 'bac +5');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `Nom du Module` varchar(200) NOT NULL,
  `controle1` float DEFAULT NULL,
  `controle2` float DEFAULT NULL,
  `EFM` float DEFAULT NULL,
  `id_student` int(11) NOT NULL,
  PRIMARY KEY (`id_note`),
  KEY `fk_student` (`id_student`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id_note`, `Nom du Module`, `controle1`, `controle2`, `EFM`, `id_student`) VALUES
(1, 'Art Graphique', 12.4, 16, 15, 14);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `niveau` int(11) NOT NULL,
  `filliere` int(11) NOT NULL,
  `matiere` int(11) NOT NULL,
  PRIMARY KEY (`id_prof`),
  KEY `fk_niv_prof` (`niveau`),
  KEY `fk_fil_prof` (`filliere`),
  KEY `fk_mod_prof` (`matiere`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom`, `prenom`, `email`, `username`, `password`, `niveau`, `filliere`, `matiere`) VALUES
(8, 'Amourgha', 'Najlae', 'najlae@gmail.com', 'najlae123', 'najlae123', 2, 1, 8),
(9, 'elmzioui', 'ilias', 'ilias@gmail.com', 'ilias123', 'ilias123', 3, 2, 9);

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id_rapport` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `id_db` int(11) NOT NULL,
  PRIMARY KEY (`id_rapport`),
  KEY `fk_db` (`id_db`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id_rapport`, `sujet`, `Message`, `id_db`) VALUES
(1, 'demande de stage', 'salut pixycom propose un stage', 3),
(2, 'bla bla bla', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', 3),
(3, 'absences', 'saouidhasuiddasbcjascas', 3),
(4, 'testrapport', 'testrapporttestrapporttestrapporttestrapport', 3),
(5, 'bilal', 'imad baraka mn n9il', 3);

-- --------------------------------------------------------

--
-- Structure de la table `training_formation_inscription`
--

DROP TABLE IF EXISTS `training_formation_inscription`;
CREATE TABLE IF NOT EXISTS `training_formation_inscription` (
  `id_inscription` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `niveau` int(11) NOT NULL,
  `filliere` int(11) NOT NULL,
  `matiere` int(11) NOT NULL,
  PRIMARY KEY (`id_inscription`),
  KEY `fk_niv_insc_t` (`niveau`),
  KEY `fk_fil_insc_t` (`filliere`),
  KEY `fk_mod_insc_t` (`matiere`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `training_formation_inscription`
--

INSERT INTO `training_formation_inscription` (`id_inscription`, `nom`, `prenom`, `email`, `telephone`, `niveau`, `filliere`, `matiere`) VALUES
(11, 'salma', 'chakker', 'aminechakker18@gmail.com', '0633789435', 1, 1, 8),
(13, 'test', 'test', 'test@gmail.com', '0633789435', 2, 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `training_student`
--

DROP TABLE IF EXISTS `training_student`;
CREATE TABLE IF NOT EXISTS `training_student` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `niveau` int(11) NOT NULL,
  `filliere` int(11) NOT NULL,
  `matiere` int(11) NOT NULL,
  PRIMARY KEY (`id_student`),
  KEY `fk_niv_t` (`niveau`),
  KEY `fk_fil_t` (`filliere`),
  KEY `fk_mod_t` (`matiere`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `training_student`
--

INSERT INTO `training_student` (`id_student`, `nom`, `prenom`, `email`, `username`, `password`, `niveau`, `filliere`, `matiere`) VALUES
(14, 'ahmad', 'etouzani', 'ahmad@gmail.com', 'ahmad123', 'ahmad123', 3, 1, 8),
(15, 'marwa', 'loud', 'marwa@gmail.com', 'marwa123', 'marwa123', 2, 1, 8),
(16, 'saad ', 'lmajarad', 'saad@gmail.com', 'saad123', 'saad123', 2, 1, 8),
(17, 'blabla', 'blabla', 'blabla@gmail.com', 'blabla', 'blabla', 2, 1, 8),
(18, 'sanae', 'karbous', 'sanae@gmail.com', 'sanae000', 'sanae000', 2, 1, 14),
(21, 'visiteur', 'visiteur', 'visiteur@gmail.com', 'visiteur', 'visiteur', 1, 1, 16);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `fk_idprof` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`id_prof`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_studentd` FOREIGN KEY (`id_studentd`) REFERENCES `diplome_student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_studentt` FOREIGN KEY (`id_studentt`) REFERENCES `training_student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD CONSTRAINT `fk_diplome` FOREIGN KEY (`id_d_student`) REFERENCES `diplome_student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_training` FOREIGN KEY (`id_t_student`) REFERENCES `training_student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `diplome_formation_inscription`
--
ALTER TABLE `diplome_formation_inscription`
  ADD CONSTRAINT `fk_fil_insc_d` FOREIGN KEY (`filliere`) REFERENCES `filieres` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_niv_insc_d` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`id_niv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `diplome_student`
--
ALTER TABLE `diplome_student`
  ADD CONSTRAINT `fk_fil_d` FOREIGN KEY (`filliere`) REFERENCES `filieres` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_niv_d` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`id_niv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `doc-fil` FOREIGN KEY (`filliere`) REFERENCES `filieres` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doc-matiere` FOREIGN KEY (`matiere`) REFERENCES `modules` (`id_module`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doc-niv` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`id_niv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `fk_fil` FOREIGN KEY (`id_fil`) REFERENCES `filieres` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_niv` FOREIGN KEY (`id_niv`) REFERENCES `niveau` (`id_niv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `fk_student` FOREIGN KEY (`id_student`) REFERENCES `diplome_student` (`id_student`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `fk_fil_prof` FOREIGN KEY (`filliere`) REFERENCES `filieres` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mod_prof` FOREIGN KEY (`matiere`) REFERENCES `modules` (`id_module`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_niv_prof` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`id_niv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `fk_db` FOREIGN KEY (`id_db`) REFERENCES `dp` (`id_db`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `training_formation_inscription`
--
ALTER TABLE `training_formation_inscription`
  ADD CONSTRAINT `fk_fil_insc_t` FOREIGN KEY (`filliere`) REFERENCES `filieres` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mod_insc_t` FOREIGN KEY (`matiere`) REFERENCES `modules` (`id_module`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_niv_insc_t` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`id_niv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `training_student`
--
ALTER TABLE `training_student`
  ADD CONSTRAINT `fk_fil_t` FOREIGN KEY (`filliere`) REFERENCES `filieres` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mod_t` FOREIGN KEY (`matiere`) REFERENCES `modules` (`id_module`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_niv_t` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`id_niv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
