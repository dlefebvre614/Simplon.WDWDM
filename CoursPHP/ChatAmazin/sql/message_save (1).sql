-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 06 juin 2021 à 06:53
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `pseudo`, `content`, `date`) VALUES
(1, 'Didier', 'Salut, c\'est Didier\r\n\r\nA bientôt', '2021-06-02 15:00:52'),
(2, 'Marcel', 'Salut Didier\r\n\r\nC\'est avec moi que tu veux parler ?', '2021-06-03 09:06:54'),
(3, 'Hubert', 'Salut Didier\r\n\r\nC\'est avec moi que tu veux parler ?', '2021-06-03 09:06:54'),
(4, 'Didier', 'je souhaite parler avec Hubert\r\nComment vas-tu ?\r\n\r\nMerci Marcel pour ta réponse.\r\n\r\n', '2021-06-03 09:08:54'),
(5, 'Hubert', 'Didier, je vais bien et toi ?', '2021-06-03 09:10:03'),
(6, 'Didier', 'Hubert, Moi aussi.', '2021-06-03 09:10:03'),
(7, 'Hubert', 'Didier, on se retrouve dans la salle1 sur Discord pour échanger.', '2021-06-03 09:12:17'),
(8, 'Didier', 'OK, à tout de suite dans la salle1 !', '2021-06-03 09:12:17'),
(9, 'Didier', 'Bonjour,', '2021-06-04 14:09:13'),
(10, 'Hubert', 'Bonjour\r\n', '2021-06-04 14:10:00'),
(11, 'Marcel', 'Bonjour Didier\r\n', '2021-06-04 14:12:56'),
(12, 'Didier', 'Salut Marcel', '2021-06-04 14:13:34'),
(13, 'Didier', 'Salut Marcel', '2021-06-04 14:18:00'),
(14, 'Hubert', 'Salut Didier', '2021-06-04 14:18:20'),
(15, 'Hubert', 'Salut Didier', '2021-06-04 14:43:22'),
(16, 'Marcel', 'Hello HUBERT', '2021-06-04 14:43:50'),
(17, '', '', '2021-06-04 14:44:46'),
(18, 'Didier', '', '2021-06-04 14:54:00'),
(19, '', 'Salut\r\n', '2021-06-04 14:54:59'),
(20, 'Didier', 'Salut\r\n', '2021-06-04 14:56:12'),
(21, 'Didier', 'Salut\r\n', '2021-06-04 14:56:59'),
(22, 'Didier', 'Salut\r\n', '2021-06-04 14:57:16'),
(23, 'Didier', 'Salut\r\n', '2021-06-04 14:57:42'),
(24, 'Hubert', 'Salut Didier', '2021-06-04 15:10:58'),
(25, 'Hubert', 'Salut Didier', '2021-06-04 15:46:36'),
(26, 'Hubert', 'Salut Didier', '2021-06-04 15:46:55'),
(27, 'Didier', 'test', '2021-06-06 08:38:10'),
(28, 'Didier', 'test1\r\n', '2021-06-06 08:38:38'),
(29, 'Hubert', 'test\r\n', '2021-06-06 08:49:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
