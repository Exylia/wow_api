<?php
define('CFG_DB_HOST', 'localhost'); // Adresse de la DB
define('CFG_DB_NAME', 'wow_api');   // Nom de la base de donnée
define('CFG_DB_USER', 'root');      // Utilisateur de la base de données
define('CFG_DB_PASS', 'password');  // Mot de passe de la base de données

define('CFG_TABLE_CHARACTER',       'character');
define('CFG_TABLE_CHARACTER_STATS', 'character_stats');

$pdo = new PDO('mysql:host=' . CFG_DB_HOST . ';dbname=' . CFG_DB_NAME, CFG_DB_USER, CFG_DB_PASS);