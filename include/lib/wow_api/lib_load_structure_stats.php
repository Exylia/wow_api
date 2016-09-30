<?php

require_once 'lib_curl.php';
require_once 'lib_wow_character.php';
require_once 'lib_wow_guild.php';
require_once 'lib_wow_item.php';

define('CFG_TABLE_CHARACTER_STATS', 'character_stats');

$server = 'Uldaman';
$character_name = 'Ghiblik';

$method = 'GET';
$url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=items,stats&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

$response = sendRestRequest($method, $url);

$guild_members_json = json_decode($response['body'], true);

$character = (array) $guild_members_json;

$sql = '';

foreach ($character['stats'] as $key => $value) {
    switch (gettype($value)) {
        case 'double':
            $sql.= 'ALTER TABLE ' . CFG_TABLE_CHARACTER_STATS . ' ADD `' . $key . '` FLOAT NOT NULL;<br>';
            break;
        case 'integer':
            $sql.= 'ALTER TABLE ' . CFG_TABLE_CHARACTER_STATS . ' ADD `' . $key . '` INT NOT NULL;<br>';
            break;
        case 'string':
            $sql.= 'ALTER TABLE ' . CFG_TABLE_CHARACTER_STATS . ' ADD `' . $key . '` VARCHAR(255) NOT NULL;<br>';
            break;
    }
}

print_r($sql);