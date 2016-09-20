<?php

require_once 'lib_curl.php';
require_once 'lib_wow_character.php';
require_once 'lib_wow_guild.php';
require_once 'lib_wow_item.php';

define('CFG_TABLE_RACE', 'race');

$method = 'GET';
$url = 'https://eu.api.battle.net/wow/data/character/races?locale=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

$response = sendRestRequest($method, $url);

$guild_members_json = json_decode($response['body'], true);

$infos = (array) $guild_members_json;

$sql = 'INSERT INTO ' . CFG_TABLE_RACE . ' ';
$sql.= '(`race_id`, `name`, `faction_id`) ';
$sql.= 'VALUES ';

foreach($infos['races'] as $race) {

    $sql.= '(';
    $sql.= '\'' . $race['id']   . '\', ';
    $sql.= '\'' . $race['name'] . '\', ';

    if ($race['side'] === 'alliance') {
        $sql.= '\'0\'';
    } else {
        $sql.= '\'1\'';
    }
    $sql.= '), ';
}

echo '<pre>';
var_dump($infos['races']);
echo '</pre>';