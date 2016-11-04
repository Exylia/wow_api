<?php

function getRealm() {
    global $pdo;

    $sql = 'SELECT * FROM ' . CFG_TABLE_REALM . ' ';

    $realm = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $realm;
}

function getCharacter($realm, $name) {
    global $cfg_current_raid;
    $character = (array) getCharacterAllInformations($realm, $name);

    $raids = array();

    foreach ($character['progression']['raids'] as $raid) {
        if (in_array($raid['id'], $cfg_current_raid)) {
            $raids[$raid['id']] = $raid;
        }
    }

    $character['progression']['raids'] = $raids;

    return $character;
}