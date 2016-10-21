<?php

require_once 'start_php.php';

// Réponse au format JSON
header('Content-Type: application/json; charset=UTF-8');

// S'il manque des arguments
if (empty($_GET) || empty($_GET['id'])) {
    header('HTTP/1.1 422 Missing arguments');
    die(json_encode(array('error' => 'Missing arguments')));
}

$sql = 'SELECT name, realm FROM `' . CFG_TABLE_CHARACTER . '` ';
$sql.= 'WHERE ';
$sql.= 'character_id = ' . $pdo->quote($_GET['id']);

$character = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if (!$character) {
    header('HTTP/1.1 404');
    die(json_encode(array('error' => 'character doesn\'t exist in data base')));
}

require_once 'lib/wow_api/wow_api_loader.php';

// Recuperation des informations du personnage
$character = (array) getCharacterAllInformations($character['realm'], $character['name']);

if (!empty($character['status']) && $character['status'] === 'nok') {
    header('HTTP/1.1 404');
    die(json_encode(array('error' => $character['reason'])));
}

$sql = 'UPDATE `' . CFG_TABLE_CHARACTER . '` SET ';
$sql.= 'name    = \'' . $character['name']    . '\', ';
$sql.= 'realm   = \'' . $character['realm']   . '\', ';
$sql.= 'faction = \'' . $character['faction'] . '\', ';
$sql.= 'class   = \'' . $character['class']   . '\', ';
$sql.= 'race    = \'' . $character['race']    . '\', ';
$sql.= 'gender  = \'' . $character['gender']  . '\', ';
$sql.= 'level   = \'' . $character['level']   . '\', ';

// Recuperation du iLvl
if (!empty($character['items']) && !empty($character['items']['averageItemLevelEquipped'])) {
    $sql.= 'ilvl = ' . $pdo->quote($character['items']['averageItemLevelEquipped']) . ', ';
}

$sql.= 'region  = \'EU\' ';
$sql.= 'WHERE ';
$sql.= 'character_id = ' . $pdo->quote($_GET['id']);

$pdo->query($sql);

// Test si les stats du perso sont deja presente en base
$character_stats = $character['stats'];

$sql = 'SELECT * FROM `' . CFG_TABLE_CHARACTER_STATS . '` ';
$sql.= 'WHERE ';
$sql.= 'character_id = ' . $pdo->quote($_GET['id']);

$result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

// Stat deja presente -> mise à jour
if ($result) {

    $sql = 'UPDATE ' . CFG_TABLE_CHARACTER_STATS . ' SET ';

    foreach ($character_stats as $key => $value) {
        $sql.= '`' . $key . '` = \'' . $value . '\', ';
    }

    $sql = substr($sql, 0, -2);

    $pdo->query($sql);

} else {    // Sinon insertion

    $sql = 'INSERT INTO ' . CFG_TABLE_CHARACTER_STATS . ' SET ';
    $sql.= 'character_id = ' . $pdo->quote($_GET['id']) . ', ';

    foreach ($character_stats as $key => $value) {
        $sql.= '`' . $key . '` = \'' . $value . '\', ';
    }

    $sql = substr($sql, 0, -2);

    $pdo->query($sql);
}

echo json_encode(array('statut' => 'ok'));

require_once 'stop_php.php';
?>