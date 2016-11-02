-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 02 Novembre 2016 à 14:03
-- Version du serveur :  5.7.15-0ubuntu0.16.04.1
-- Version de PHP :  5.6.27-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wow_api`
--

-- --------------------------------------------------------

--
-- Structure de la table `warcraftlog_encounter`
--

CREATE TABLE `warcraftlog_encounter` (
  `encounter_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `warcraftlog_zone`
--

CREATE TABLE `warcraftlog_zone` (
  `zone_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `warcraftlog_encounter`
--
ALTER TABLE `warcraftlog_encounter`
  ADD PRIMARY KEY (`encounter_id`),
  ADD UNIQUE KEY `encounter_id` (`encounter_id`);

--
-- Index pour la table `warcraftlog_zone`
--
ALTER TABLE `warcraftlog_zone`
  ADD PRIMARY KEY (`zone_id`),
  ADD UNIQUE KEY `zone_id` (`zone_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
