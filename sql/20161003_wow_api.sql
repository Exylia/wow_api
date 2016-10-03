-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 03 Octobre 2016 à 14:08
-- Version du serveur :  5.7.15-0ubuntu0.16.04.1
-- Version de PHP :  5.6.26-1+deb.sury.org~xenial+1

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
-- Structure de la table `character`
--

CREATE TABLE `character` (
  `character_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `realm` varchar(255) NOT NULL,
  `faction` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `race` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `character`
--

INSERT INTO `character` (`character_id`, `name`, `region`, `realm`, `faction`, `class`, `race`, `gender`, `level`) VALUES
(5, 'Exylïa', 'EU', 'Uldaman', 0, 11, 4, 1, 101),
(6, 'Ghiblik', 'EU', 'Uldaman', 0, 7, 3, 0, 110);

-- --------------------------------------------------------

--
-- Structure de la table `character_stats`
--

CREATE TABLE `character_stats` (
  `character_id` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `powerType` varchar(255) NOT NULL,
  `power` int(11) NOT NULL,
  `str` int(11) NOT NULL,
  `agi` int(11) NOT NULL,
  `int` int(11) NOT NULL,
  `sta` int(11) NOT NULL,
  `speedRating` float NOT NULL,
  `speedRatingBonus` float NOT NULL,
  `crit` float NOT NULL,
  `critRating` int(11) NOT NULL,
  `haste` float NOT NULL,
  `hasteRating` int(11) NOT NULL,
  `hasteRatingPercent` float NOT NULL,
  `mastery` float NOT NULL,
  `masteryRating` int(11) NOT NULL,
  `leech` float NOT NULL,
  `leechRating` float NOT NULL,
  `leechRatingBonus` float NOT NULL,
  `versatility` int(11) NOT NULL,
  `versatilityDamageDoneBonus` float NOT NULL,
  `versatilityHealingDoneBonus` float NOT NULL,
  `versatilityDamageTakenBonus` float NOT NULL,
  `avoidanceRating` float NOT NULL,
  `avoidanceRatingBonus` float NOT NULL,
  `spellPen` int(11) NOT NULL,
  `spellCrit` float NOT NULL,
  `spellCritRating` int(11) NOT NULL,
  `mana5` float NOT NULL,
  `mana5Combat` float NOT NULL,
  `armor` int(11) NOT NULL,
  `dodge` float NOT NULL,
  `dodgeRating` int(11) NOT NULL,
  `parry` float NOT NULL,
  `parryRating` int(11) NOT NULL,
  `block` float NOT NULL,
  `blockRating` int(11) NOT NULL,
  `mainHandDmgMin` float NOT NULL,
  `mainHandDmgMax` float NOT NULL,
  `mainHandSpeed` float NOT NULL,
  `mainHandDps` float NOT NULL,
  `offHandDmgMin` float NOT NULL,
  `offHandDmgMax` float NOT NULL,
  `offHandSpeed` float NOT NULL,
  `offHandDps` float NOT NULL,
  `rangedDmgMin` float NOT NULL,
  `rangedDmgMax` float NOT NULL,
  `rangedSpeed` float NOT NULL,
  `rangedDps` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `character_stats`
--

INSERT INTO `character_stats` (`character_id`, `health`, `powerType`, `power`, `str`, `agi`, `int`, `sta`, `speedRating`, `speedRatingBonus`, `crit`, `critRating`, `haste`, `hasteRating`, `hasteRatingPercent`, `mastery`, `masteryRating`, `leech`, `leechRating`, `leechRatingBonus`, `versatility`, `versatilityDamageDoneBonus`, `versatilityHealingDoneBonus`, `versatilityDamageTakenBonus`, `avoidanceRating`, `avoidanceRatingBonus`, `spellPen`, `spellCrit`, `spellCritRating`, `mana5`, `mana5Combat`, `armor`, `dodge`, `dodgeRating`, `parry`, `parryRating`, `block`, `blockRating`, `mainHandDmgMin`, `mainHandDmgMax`, `mainHandSpeed`, `mainHandDps`, `offHandDmgMin`, `offHandDmgMax`, `offHandSpeed`, `offHandDps`, `rangedDmgMin`, `rangedDmgMax`, `rangedSpeed`, `rangedDps`) VALUES
(5, 1756800, 'maelstrom', 150, 4398, 22588, 7328, 29280, 34.8743, 0, 23.8371, 3093, 28.9099, 5587, 17.1908, 70.8743, 6103, 0, 0, 0, 1953, 4.8825, 4.8825, 2.44125, 0, 0, 0, 23.8371, 3093, 0, 0, 2457, 11.2792, 0, 0, 0, 3, 0, 22085, 25932, 2.017, 11903.2, 11042, 12966, 2.017, 5951.62, -1, -1, -1, -1),
(6, 1756800, 'maelstrom', 150, 4398, 22588, 7328, 29280, 34.8743, 0, 23.8371, 3093, 28.9099, 5587, 17.1908, 70.8743, 6103, 0, 0, 0, 1953, 4.8825, 4.8825, 2.44125, 0, 0, 0, 23.8371, 3093, 0, 0, 2457, 11.2792, 0, 0, 0, 3, 0, 22085, 25932, 2.017, 11903.2, 11042, 12966, 2.017, 5951.62, -1, -1, -1, -1);

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `class`
--

INSERT INTO `class` (`class_id`, `name`) VALUES
(1, 'Guerrier'),
(2, 'Paladin'),
(3, 'Chasseur'),
(4, 'Voleur'),
(5, 'Prêtre'),
(6, 'Chevalier de la mort'),
(7, 'Chaman'),
(8, 'Mage'),
(9, 'Démoniste'),
(10, 'Moine'),
(11, 'Druide'),
(12, 'Chasseur de démons');

-- --------------------------------------------------------

--
-- Structure de la table `faction`
--

CREATE TABLE `faction` (
  `faction_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `faction`
--

INSERT INTO `faction` (`faction_id`, `name`) VALUES
(0, 'Alliance'),
(1, 'Horde'),
(2, 'Neutre');

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `race`
--

INSERT INTO `race` (`race_id`, `name`, `faction_id`) VALUES
(1, 'Humain', 0),
(2, 'Orc', 1),
(3, 'Nain', 0),
(4, 'Elfe de la nuit', 0),
(5, 'Mort-vivant', 1),
(6, 'Tauren', 1),
(7, 'Gnome', 0),
(8, 'Troll', 1),
(9, 'Gobelin', 1),
(10, 'Elfe de sang', 1),
(11, 'Draeneï', 0),
(22, 'Worgen', 0),
(24, 'Pandaren', 1),
(25, 'Pandaren', 0),
(26, 'Pandaren', 1);

-- --------------------------------------------------------

--
-- Structure de la table `realm`
--

CREATE TABLE `realm` (
  `realm_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `locale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `realm`
--

INSERT INTO `realm` (`realm_id`, `name`, `locale`) VALUES
(1, 'Aegwynn', 'de_DE'),
(2, 'Aerie Peak', 'en_GB'),
(3, 'Agamaggan', 'en_GB'),
(4, 'Aggra (Português)', 'pt_BR'),
(5, 'Aggramar', 'en_GB'),
(6, 'Ahn\'Qiraj', 'en_GB'),
(7, 'Al\'Akir', 'en_GB'),
(8, 'Alexstrasza', 'de_DE'),
(9, 'Alleria', 'de_DE'),
(10, 'Alonsus', 'en_GB'),
(11, 'Aman\'Thul', 'de_DE'),
(12, 'Ambossar', 'de_DE'),
(13, 'Anachronos', 'en_GB'),
(14, 'Anetheron', 'de_DE'),
(15, 'Antonidas', 'de_DE'),
(16, 'Anub\'arak', 'de_DE'),
(17, 'Arak-arahm', 'fr_FR'),
(18, 'Arathi', 'fr_FR'),
(19, 'Arathor', 'en_GB'),
(20, 'Archimonde', 'fr_FR'),
(21, 'Area 52', 'de_DE'),
(22, 'Argent Dawn', 'en_GB'),
(23, 'Arthas', 'de_DE'),
(24, 'Arygos', 'de_DE'),
(25, 'Ashenvale', 'ru_RU'),
(26, 'Aszune', 'en_GB'),
(27, 'Auchindoun', 'en_GB'),
(28, 'Azjol-Nerub', 'en_GB'),
(29, 'Azshara', 'de_DE'),
(30, 'Azuregos', 'ru_RU'),
(31, 'Azuremyst', 'en_GB'),
(32, 'Baelgun', 'de_DE'),
(33, 'Balnazzar', 'en_GB'),
(34, 'Blackhand', 'de_DE'),
(35, 'Blackmoore', 'de_DE'),
(36, 'Blackrock', 'de_DE'),
(37, 'Blackscar', 'ru_RU'),
(38, 'Blade\'s Edge', 'en_GB'),
(39, 'Bladefist', 'en_GB'),
(40, 'Bloodfeather', 'en_GB'),
(41, 'Bloodhoof', 'en_GB'),
(42, 'Bloodscalp', 'en_GB'),
(43, 'Blutkessel', 'de_DE'),
(44, 'Booty Bay', 'ru_RU'),
(45, 'Borean Tundra', 'ru_RU'),
(46, 'Boulderfist', 'en_GB'),
(47, 'Bronze Dragonflight', 'en_GB'),
(48, 'Bronzebeard', 'en_GB'),
(49, 'Burning Blade', 'en_GB'),
(50, 'Burning Legion', 'en_GB'),
(51, 'Burning Steppes', 'en_GB'),
(52, 'C\'Thun', 'es_ES'),
(53, 'Chamber of Aspects', 'en_GB'),
(54, 'Chants éternels', 'fr_FR'),
(55, 'Cho\'gall', 'fr_FR'),
(56, 'Chromaggus', 'en_GB'),
(57, 'Colinas Pardas', 'es_ES'),
(58, 'Confrérie du Thorium', 'fr_FR'),
(59, 'Conseil des Ombres', 'fr_FR'),
(60, 'Crushridge', 'en_GB'),
(61, 'Culte de la Rive noire', 'fr_FR'),
(62, 'Daggerspine', 'en_GB'),
(63, 'Dalaran', 'fr_FR'),
(64, 'Dalvengyr', 'de_DE'),
(65, 'Darkmoon Faire', 'en_GB'),
(66, 'Darksorrow', 'en_GB'),
(67, 'Darkspear', 'en_GB'),
(68, 'Das Konsortium', 'de_DE'),
(69, 'Das Syndikat', 'de_DE'),
(70, 'Deathguard', 'ru_RU'),
(71, 'Deathweaver', 'ru_RU'),
(72, 'Deathwing', 'en_GB'),
(73, 'Deepholm', 'ru_RU'),
(74, 'Defias Brotherhood', 'en_GB'),
(75, 'Dentarg', 'en_GB'),
(76, 'Der Mithrilorden', 'de_DE'),
(77, 'Der Rat von Dalaran', 'de_DE'),
(78, 'Der abyssische Rat', 'de_DE'),
(79, 'Destromath', 'de_DE'),
(80, 'Dethecus', 'de_DE'),
(81, 'Die Aldor', 'de_DE'),
(82, 'Die Arguswacht', 'de_DE'),
(83, 'Die Nachtwache', 'de_DE'),
(84, 'Die Silberne Hand', 'de_DE'),
(85, 'Die Todeskrallen', 'de_DE'),
(86, 'Die ewige Wacht', 'de_DE'),
(87, 'Doomhammer', 'en_GB'),
(88, 'Draenor', 'en_GB'),
(89, 'Dragonblight', 'en_GB'),
(90, 'Dragonmaw', 'en_GB'),
(91, 'Drak\'thul', 'en_GB'),
(92, 'Drek\'Thar', 'fr_FR'),
(93, 'Dun Modr', 'es_ES'),
(94, 'Dun Morogh', 'de_DE'),
(95, 'Dunemaul', 'en_GB'),
(96, 'Durotan', 'de_DE'),
(97, 'Earthen Ring', 'en_GB'),
(98, 'Echsenkessel', 'de_DE'),
(99, 'Eitrigg', 'fr_FR'),
(100, 'Eldre\'Thalas', 'fr_FR'),
(101, 'Elune', 'fr_FR'),
(102, 'Emerald Dream', 'en_GB'),
(103, 'Emeriss', 'en_GB'),
(104, 'Eonar', 'en_GB'),
(105, 'Eredar', 'de_DE'),
(106, 'Eversong', 'ru_RU'),
(107, 'Executus', 'en_GB'),
(108, 'Exodar', 'es_ES'),
(109, 'Festung der Stürme', 'de_DE'),
(110, 'Fordragon', 'ru_RU'),
(111, 'Forscherliga', 'de_DE'),
(112, 'Frostmane', 'en_GB'),
(113, 'Frostmourne', 'de_DE'),
(114, 'Frostwhisper', 'en_GB'),
(115, 'Frostwolf', 'de_DE'),
(116, 'Galakrond', 'ru_RU'),
(117, 'Garona', 'fr_FR'),
(118, 'Garrosh', 'de_DE'),
(119, 'Genjuros', 'en_GB'),
(120, 'Ghostlands', 'en_GB'),
(121, 'Gilneas', 'de_DE'),
(122, 'Goldrinn', 'ru_RU'),
(123, 'Gordunni', 'ru_RU'),
(124, 'Gorgonnash', 'de_DE'),
(125, 'Greymane', 'ru_RU'),
(126, 'Grim Batol', 'en_GB'),
(127, 'Grom', 'ru_RU'),
(128, 'Gul\'dan', 'de_DE'),
(129, 'Hakkar', 'en_GB'),
(130, 'Haomarush', 'en_GB'),
(131, 'Hellfire', 'en_GB'),
(132, 'Hellscream', 'en_GB'),
(133, 'Howling Fjord', 'ru_RU'),
(134, 'Hyjal', 'fr_FR'),
(135, 'Illidan', 'fr_FR'),
(136, 'Jaedenar', 'en_GB'),
(137, 'Kael\'thas', 'fr_FR'),
(138, 'Karazhan', 'en_GB'),
(139, 'Kargath', 'de_DE'),
(140, 'Kazzak', 'en_GB'),
(141, 'Kel\'Thuzad', 'de_DE'),
(142, 'Khadgar', 'en_GB'),
(143, 'Khaz Modan', 'fr_FR'),
(144, 'Khaz\'goroth', 'de_DE'),
(145, 'Kil\'jaeden', 'de_DE'),
(146, 'Kilrogg', 'en_GB'),
(147, 'Kirin Tor', 'fr_FR'),
(148, 'Kor\'gall', 'en_GB'),
(149, 'Krag\'jin', 'de_DE'),
(150, 'Krasus', 'fr_FR'),
(151, 'Kul Tiras', 'en_GB'),
(152, 'Kult der Verdammten', 'de_DE'),
(153, 'La Croisade écarlate', 'fr_FR'),
(154, 'Laughing Skull', 'en_GB'),
(155, 'Les Clairvoyants', 'fr_FR'),
(156, 'Les Sentinelles', 'fr_FR'),
(157, 'Lich King', 'ru_RU'),
(158, 'Lightbringer', 'en_GB'),
(159, 'Lightning\'s Blade', 'en_GB'),
(160, 'Lordaeron', 'de_DE'),
(161, 'Los Errantes', 'es_ES'),
(162, 'Lothar', 'de_DE'),
(163, 'Madmortem', 'de_DE'),
(164, 'Magtheridon', 'en_GB'),
(165, 'Mal\'Ganis', 'de_DE'),
(166, 'Malfurion', 'de_DE'),
(167, 'Malorne', 'de_DE'),
(168, 'Malygos', 'de_DE'),
(169, 'Mannoroth', 'de_DE'),
(170, 'Marécage de Zangar', 'fr_FR'),
(171, 'Mazrigos', 'en_GB'),
(172, 'Medivh', 'fr_FR'),
(173, 'Minahonda', 'es_ES'),
(174, 'Moonglade', 'en_GB'),
(175, 'Mug\'thol', 'de_DE'),
(176, 'Nagrand', 'en_GB'),
(177, 'Nathrezim', 'de_DE'),
(178, 'Naxxramas', 'fr_FR'),
(179, 'Nazjatar', 'de_DE'),
(180, 'Nefarian', 'de_DE'),
(181, 'Nemesis', 'it_IT'),
(182, 'Neptulon', 'en_GB'),
(183, 'Ner\'zhul', 'fr_FR'),
(184, 'Nera\'thor', 'de_DE'),
(185, 'Nethersturm', 'de_DE'),
(186, 'Nordrassil', 'en_GB'),
(187, 'Norgannon', 'de_DE'),
(188, 'Nozdormu', 'de_DE'),
(189, 'Onyxia', 'de_DE'),
(190, 'Outland', 'en_GB'),
(191, 'Perenolde', 'de_DE'),
(192, 'Pozzo dell\'Eternità', 'it_IT'),
(193, 'Proudmoore', 'de_DE'),
(194, 'Quel\'Thalas', 'en_GB'),
(195, 'Ragnaros', 'en_GB'),
(196, 'Rajaxx', 'de_DE'),
(197, 'Rashgarroth', 'fr_FR'),
(198, 'Ravencrest', 'en_GB'),
(199, 'Ravenholdt', 'en_GB'),
(200, 'Razuvious', 'ru_RU'),
(201, 'Rexxar', 'de_DE'),
(202, 'Runetotem', 'en_GB'),
(203, 'Sanguino', 'es_ES'),
(204, 'Sargeras', 'fr_FR'),
(205, 'Saurfang', 'en_GB'),
(206, 'Scarshield Legion', 'en_GB'),
(207, 'Sen\'jin', 'de_DE'),
(208, 'Shadowsong', 'en_GB'),
(209, 'Shattered Halls', 'en_GB'),
(210, 'Shattered Hand', 'en_GB'),
(211, 'Shattrath', 'de_DE'),
(212, 'Shen\'dralar', 'es_ES'),
(213, 'Silvermoon', 'en_GB'),
(214, 'Sinstralis', 'fr_FR'),
(215, 'Skullcrusher', 'en_GB'),
(216, 'Soulflayer', 'ru_RU'),
(217, 'Spinebreaker', 'en_GB'),
(218, 'Sporeggar', 'en_GB'),
(219, 'Steamwheedle Cartel', 'en_GB'),
(220, 'Stormrage', 'en_GB'),
(221, 'Stormreaver', 'en_GB'),
(222, 'Stormscale', 'en_GB'),
(223, 'Sunstrider', 'en_GB'),
(224, 'Sylvanas', 'en_GB'),
(225, 'Taerar', 'de_DE'),
(226, 'Talnivarr', 'en_GB'),
(227, 'Tarren Mill', 'en_GB'),
(228, 'Teldrassil', 'de_DE'),
(229, 'Temple noir', 'fr_FR'),
(230, 'Terenas', 'en_GB'),
(231, 'Terokkar', 'en_GB'),
(232, 'Terrordar', 'de_DE'),
(233, 'The Maelstrom', 'en_GB'),
(234, 'The Sha\'tar', 'en_GB'),
(235, 'The Venture Co', 'en_GB'),
(236, 'Theradras', 'de_DE'),
(237, 'Thermaplugg', 'ru_RU'),
(238, 'Thrall', 'de_DE'),
(239, 'Throk\'Feroth', 'fr_FR'),
(240, 'Thunderhorn', 'en_GB'),
(241, 'Tichondrius', 'de_DE'),
(242, 'Tirion', 'de_DE'),
(243, 'Todeswache', 'de_DE'),
(244, 'Trollbane', 'en_GB'),
(245, 'Turalyon', 'en_GB'),
(246, 'Twilight\'s Hammer', 'en_GB'),
(247, 'Twisting Nether', 'en_GB'),
(248, 'Tyrande', 'es_ES'),
(249, 'Uldaman', 'fr_FR'),
(250, 'Ulduar', 'de_DE'),
(251, 'Uldum', 'es_ES'),
(252, 'Un\'Goro', 'de_DE'),
(253, 'Varimathras', 'fr_FR'),
(254, 'Vashj', 'en_GB'),
(255, 'Vek\'lor', 'de_DE'),
(256, 'Vek\'nilash', 'en_GB'),
(257, 'Vol\'jin', 'fr_FR'),
(258, 'Wildhammer', 'en_GB'),
(259, 'Wrathbringer', 'de_DE'),
(260, 'Xavius', 'en_GB'),
(261, 'Ysera', 'de_DE'),
(262, 'Ysondre', 'fr_FR'),
(263, 'Zenedar', 'en_GB'),
(264, 'Zirkel des Cenarius', 'de_DE'),
(265, 'Zul\'jin', 'es_ES'),
(266, 'Zuluhed', 'de_DE');

-- --------------------------------------------------------

--
-- Structure de la table `roster`
--

CREATE TABLE `roster` (
  `roster_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`character_id`),
  ADD UNIQUE KEY `charactere_id` (`character_id`);

--
-- Index pour la table `character_stats`
--
ALTER TABLE `character_stats`
  ADD UNIQUE KEY `character_id` (`character_id`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_id` (`class_id`);

--
-- Index pour la table `faction`
--
ALTER TABLE `faction`
  ADD PRIMARY KEY (`faction_id`),
  ADD UNIQUE KEY `faction_id` (`faction_id`);

--
-- Index pour la table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`race_id`),
  ADD UNIQUE KEY `race_id` (`race_id`);

--
-- Index pour la table `realm`
--
ALTER TABLE `realm`
  ADD PRIMARY KEY (`realm_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `character`
--
ALTER TABLE `character`
  MODIFY `character_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `realm`
--
ALTER TABLE `realm`
  MODIFY `realm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
