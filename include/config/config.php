<?php
define('CFG_PATH_FILE', realpath(dirname(__FILE__).'/../..'));
define('CFG_PATH_HTTP', 'http://localhost/wow_api');

define('CFG_TABLE_USER',   'user'); // Table des utilisateurs
define('CFG_TABLE_REALM',  'realm');  // Table des serveurs
define('CFG_TABLE_CLASS',  'class');  // Table des classes jouables
define('CFG_TABLE_RACE',   'race');   // Table des races jouables
define('CFG_TABLE_ROSTER', 'roster'); // Table des rosters
define('CFG_TABLE_ROSTER_CHARACTER', 'roster_character');

$page_no_connect = array(
	'signup.php',
	'login.php',
);

?>