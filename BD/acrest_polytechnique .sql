-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 30 oct. 2019 à 01:19
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
-- Base de données :  `acrest_polytechnique`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id_inscription` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `cni` varchar(15) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pere` varchar(255) DEFAULT NULL,
  `mere` varchar(255) NOT NULL,
  `contact_parent` int(11) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `option_diplome` varchar(30) DEFAULT NULL,
  `filiere1` varchar(255) NOT NULL,
  `specialite_1` varchar(255) NOT NULL,
  `filiere2` varchar(255) DEFAULT NULL,
  `specialite_2` varchar(255) NOT NULL,
  `filiere3` varchar(255) DEFAULT NULL,
  `specialite_3` varchar(255) NOT NULL,
  `code_inscription` varchar(30) NOT NULL,
  PRIMARY KEY (`id_inscription`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_inscription`, `nom`, `prenom`, `date_naissance`, `lieu`, `pays`, `cni`, `telephone`, `email`, `pere`, `mere`, `contact_parent`, `diplome`, `option_diplome`, `filiere1`, `specialite_1`, `filiere2`, `specialite_2`, `filiere3`, `specialite_3`, `code_inscription`) VALUES
(22, 'Tiwa', 'Grant', '1994-07-09', 'BANGANG', 'CMEROUN', '117369591', 672517118, 'granttiwa0@gmail.com', 'Tchino Samuel', 'Sonwa Marie Claire', 662250370, 'LICENCE', 'Informatique', 'GÃ©nie Informatique', '', 'agriculture', '', 'Etude medico sanitaire', '', 'xwgkpse1e9j'),
(23, 'edge', 'pre_edge', '2019-08-05', 'Acrest', 'nkk', '1109090', 8096532, 'edge@hotmil.com', 'Internet explorer', 'Mme explorer', 97536, 'MASTER', '', 'Etude mÃ©dico-sanitaires', '', 'Arts et Metiers de la Culture', '', 'genie mecanique', '', 'cmyq3dcxa9p'),
(24, 'today', 'gt today', '2019-08-24', 'uds', 'tchad', '1109097654', 666666666, 'today@mail.vc', 'hier', 'oday', 8754335, 'BACC', 'c', 'GÃ©nie Informatique', '', NULL, '', NULL, '', 'eb0dhs7k7zn'),
(25, 'xxxxx', 'xxxx', '2019-09-03', 'dsg', 'foto', '111111000', 444444444, 'xxx@moil.vc', 'PERE', 'mere', 555555555, 'BACC', 'ddddd', 'GÃ©nie Informatique', '', 'Etude mÃ©dico-sanitaires', '', 'Arts et MÃ©tiers de la Culture', '', '3ou8mu8y0dw'),
(26, 'sp', 'spp', '2019-09-06', 'iiel', 'qsd', '1173000000', 672517118, 'moi@mo.bv', 'pere', 'mere', 678999999, 'LICENCE', '', 'Sciences Environnementales', 'Gestion Environnementale', 'GÃ©nie Informatique', 'GÃ©nie Logiciel', 'GÃ©nie Informatique', 'Maintenance informatique', 'palcp4dtr2n'),
(27, 'hybride', 'hb_pre', '2019-09-30', 'uds', 'Tchad', '1111111112', 676767676, 'mail@ml.cp', 'pere', 'mere', 988765554, 'PROBATOIRE', 'c', 'GÃ©nie Informatique', 'Maintenance informatique', 'Gestion', 'ComptabilitÃ© et Gestion des entreprises', 'Etude mÃ©dico-sanitaires', 'Odontostomatologie', '26ds70eyvlt');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(3, 'moil@mol.elec'),
(2, 'olivierkwemy@yahoo.fr');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paiement` int(11) NOT NULL AUTO_INCREMENT,
  `id_inscription` int(11) NOT NULL,
  `montant` double NOT NULL,
  `date_paiement` datetime NOT NULL,
  `sender_number` varchar(15) NOT NULL,
  `transaction_id` varchar(15) NOT NULL,
  PRIMARY KEY (`id_paiement`),
  KEY `id_inscription` (`id_inscription`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id_paiement`, `id_inscription`, `montant`, `date_paiement`, `sender_number`, `transaction_id`) VALUES
(17, 22, 25, '2019-08-12 00:00:00', '237672517118', '820897395'),
(18, 23, 25, '2019-08-12 00:00:00', '237672517118', '820905588'),
(19, 26, 100, '2019-09-06 00:00:00', '237679174222', '87589876');

-- --------------------------------------------------------

--
-- Structure de la table `polytechnique`
--

DROP TABLE IF EXISTS `polytechnique`;
CREATE TABLE IF NOT EXISTS `polytechnique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `polytechnique`
--

INSERT INTO `polytechnique` (`id`, `email`, `password`) VALUES
(5, 'granttiwa0@gmail.com', '7d977cd1bb959fe3f63dff70173f1e074a8b5c2f985a385fb204ae6942391a89');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`id_inscription`) REFERENCES `inscription` (`id_inscription`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
