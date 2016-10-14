<?php
define('CFG_PATH_FILE', realpath(dirname(__FILE__).'/../..'));
define('CFG_PATH_HTTP', 'http://'.@$_SERVER['HTTP_HOST'].str_replace(@$_SERVER['DOCUMENT_ROOT'], '', CFG_PATH_FILE));

define('CFG_TABLE_USER',   'user'); // Table des utilisateurs
define('CFG_TABLE_REALM',  'realm');  // Table des serveurs
define('CFG_TABLE_CLASS',  'class');  // Table des classes jouables
define('CFG_TABLE_RACE',   'race');   // Table des races jouables
define('CFG_TABLE_ROSTER', 'roster'); // Table des rosters
define('CFG_TABLE_ROSTER_CHARACTER', 'roster_character');
?>