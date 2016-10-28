<?php
require_once 'config_server.php';

define('CFG_TABLE_USER',             'user'); // Table des utilisateurs
define('CFG_TABLE_CHARACTER',        'character');
define('CFG_TABLE_CHARACTER_STATS',  'character_stats');
define('CFG_TABLE_REALM',            'realm');  // Table des serveurs
define('CFG_TABLE_CLASS',            'class');  // Table des classes jouables
define('CFG_TABLE_RACE',             'race');   // Table des races jouables
define('CFG_TABLE_ROSTER',           'roster'); // Table des rosters
define('CFG_TABLE_ROSTER_CHARACTER', 'roster_character');
define('CFG_TABLE_ROSTER_USER',      'roster_user');

$page_no_connect = array(
	'signup.php',
	'login.php',
);

// Raid to show on character page
$cfg_current_raid = array(
    35, // Emerald Nightmare
    37, // Trial of Valor
);

?>