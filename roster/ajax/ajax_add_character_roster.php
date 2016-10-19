<?php

require_once 'start_php.php';

// Réponse au format JSON
header('Content-Type: application/json; charset=UTF-8');

// S'il manque des arguments
if (empty($_POST) || empty($_POST['realm']) || empty($_POST['name']) || empty($_POST['roster_id'])) {
    header('HTTP/1.1 422 Missing arguments');
    die(json_encode(array('error' => 'Missing arguments')));
}

require_once 'lib/wow_api/wow_api_loader.php';

// Recuperation des informations du personnage
$character = (array) getCharacterAllInformations($_POST['realm'], $_POST['name']);

if (!empty($character['status']) && $character['status'] === 'nok') {
    header('HTTP/1.1 404');
    die(json_encode(array('error' => $character['reason'])));
}

//
// Error personnage introuvable a gerer ici !
//

// Test si le personnage existe deja en base
$sql = 'SELECT * FROM `' . CFG_TABLE_CHARACTER . '` ';
$sql.= 'WHERE ';
$sql.= 'realm = ' . $pdo->quote($_POST['realm']) . ' AND ';
$sql.= 'name  = ' . $pdo->quote($_POST['name']);

$result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$character_id = '';

// existe deja dans la table character-> mise à jour
if ($result) {

    $character_id = $result['character_id'];

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
    $sql.= 'character_id = ' . $pdo->quote($character_id);

    $pdo->query($sql);

} else {    // Sinon Insertion

    $sql = 'INSERT INTO `' . CFG_TABLE_CHARACTER . '` SET ';
    $sql.= 'name    = \'' . $character['name']    . '\', ';
    $sql.= 'realm   = \'' . $character['realm']   . '\', ';
    $sql.= 'faction = \'' . $character['faction'] . '\', ';
    $sql.= 'class   = \'' . $character['class']   . '\', ';
    $sql.= 'race    = \'' . $character['race']    . '\', ';
    $sql.= 'gender  = \'' . $character['gender']  . '\', ';
    $sql.= 'level   = \'' . $character['level']   . '\', ';
    $sql.= 'region  = \'EU\'';

    $pdo->query($sql);

    // Recuperation de l'id
    $character_id = $pdo->lastInsertId();

}

// Test si les stats du perso sont deja presente en base
$character_stats = $character['stats'];

$sql = 'SELECT * FROM `' . CFG_TABLE_CHARACTER_STATS . '` ';
$sql.= 'WHERE ';
$sql.= 'character_id = ' . $pdo->quote($character_id);

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
    $sql.= 'character_id = ' . $pdo->quote($character_id) . ', ';

    foreach ($character_stats as $key => $value) {
        $sql.= '`' . $key . '` = \'' . $value . '\', ';
    }

    $sql = substr($sql, 0, -2);

    $pdo->query($sql);
}

$sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER_CHARACTER . ' ';
$sql.= 'WHERE ';
$sql.= 'roster_id = ' . $pdo->quote($_POST['roster_id']) . ' AND ';
$sql.= 'character_id = ' . $pdo->quote($character_id);

if (!$pdo->query($sql)->fetch(PDO::FETCH_ASSOC)) {
    $sql = 'INSERT INTO ' . CFG_TABLE_ROSTER_CHARACTER . ' SET ';
    $sql.= 'roster_id = ' . $pdo->quote($_POST['roster_id']) . ', ';
    $sql.= 'character_id = ' . $pdo->quote($character_id);

    $pdo->query($sql);
}


echo json_encode(array('character_id' => $character_id));

require_once 'stop_php.php';
?>