-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 fév. 2023 à 18:11
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `plateforme_icns`
--

CREATE TABLE `plateforme_icns` (
  `ID` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `plateforme_icns`
--

INSERT INTO `plateforme_icns` (`ID`, `email`, `password`, `status`, `lname`, `fname`) VALUES
(2, 'youssefhaimour2@gmail.com', '123', 0, NULL, NULL),
(5, 'youssefhaimour3@gmail.com', '123', 1, NULL, NULL),
(6, 'youssefhaimour4@gmail.com', '123', 0, NULL, NULL),
(13, 'youssefhaimour6@gmail.com', 'is13p99f', 0, 'haimour', 'youssef'),
(14, 'youssefhaimour5@gmail.com', 'kvqq91b3', 0, 'haimour', 'youssef'),
(15, 'youssefhaimour8@gmail.com', 'x8gmt2os', 0, 'haimour', 'youssef'),
(27, 'youssefhaimour1@gmail.com', 'jmt2dc53', 0, 'haimour', 'youssef'),
(29, 'youssefhaimour10@gmail.com', 'lnkcse5c', 0, 'haimour', 'youssef'),
(30, 'youssefhaimour11@gmail.com', '17vm5a0n', 0, 'haimour', 'youssef'),
(31, 'youssefhaimour12@gmail.com', 'qukpe9e9', 1, 'haimour', 'youssef');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `plateforme_icns`
--
ALTER TABLE `plateforme_icns`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `plateforme_icns`
--
ALTER TABLE `plateforme_icns`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
