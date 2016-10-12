<?php
require_once 'start_php.php';

if (empty($_GET['id'])) {
    redirect(CFG_PATH_HTTP . '/admin/rosters/index.php');
}

if (!empty($_POST)) {

}

// Recuperation des informations du roster
$sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' ';
$sql.= 'WHERE ';
$sql.= 'roster_id = ' . $pdo->quote($_GET['id']) . '';

$roster = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

// Recuperation des personnages du roster
$sql = 'SELECT ';
$sql.= 'C.character_id, ';
$sql.= 'C.name, ';
$sql.= 'C.level, ';
$sql.= 'CLASS.name as class, ';
$sql.= 'RACE.name as race ';
$sql.= 'FROM ' . CFG_TABLE_ROSTER_CHARACTER . ' RC ';
$sql.= 'LEFT JOIN `' . CFG_TABLE_CHARACTER . '` C ON C.character_id = RC.character_id ';
$sql.= 'LEFT JOIN ' . CFG_TABLE_CLASS . ' CLASS ON CLASS.class_id = C.class ';
$sql.= 'LEFT JOIN ' . CFG_TABLE_RACE . ' RACE ON RACE.race_id = C.race ';
$sql.= 'WHERE ';
$sql.= 'RC.roster_id = ' . $pdo->quote($_GET['id']);

$roster_characters = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// Recuperation de la liste des serveurs
$realms = getRealm();

require_once 'view_view_roster.phtml';

require_once 'stop_php.php';

?>