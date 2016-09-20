SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `character` (
  `charactere_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `realm` varchar(255) NOT NULL,
  `faction` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `race` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `faction` (
  `faction_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `faction` (`faction_id`, `name`) VALUES
(0, 'Alliance'),
(1, 'Horde'),
(2, 'Neutre');

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(24, 'Pandaren', 2),
(25, 'Pandaren', 0),
(26, 'Pandaren', 1);


ALTER TABLE `character`
  ADD PRIMARY KEY (`charactere_id`),
  ADD UNIQUE KEY `charactere_id` (`charactere_id`);

ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_id` (`class_id`);

ALTER TABLE `faction`
  ADD PRIMARY KEY (`faction_id`),
  ADD UNIQUE KEY `faction_id` (`faction_id`);

ALTER TABLE `race`
  ADD PRIMARY KEY (`race_id`),
  ADD UNIQUE KEY `race_id` (`race_id`);


ALTER TABLE `character`
  MODIFY `charactere_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
