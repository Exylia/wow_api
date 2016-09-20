<?php

require_once 'lib_curl.php';
require_once 'lib_wow_character.php';
require_once 'lib_wow_guild.php';
require_once 'lib_wow_item.php';

define('CFG_TABLE_CLASS', 'class');

$method = 'GET';
$url = 'https://eu.api.battle.net/wow/data/character/classes?locale=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

$response = sendRestRequest($method, $url);

$guild_members_json = json_decode($response['body'], true);

$infos = (array) $guild_members_json;

$sql = 'INSERT INTO ' . CFG_TABLE_CLASS . ' ';
$sql.= '(`class_id`, `name`) ';
$sql.= 'VALUES ';

foreach($infos['classes'] as $class) {

    $sql.= '(';
    $sql.= '\'' . $class['id']   . '\', ';
    $sql.= '\'' . $class['name'] . '\'';
    $sql.= '), ';
}

echo '<pre>';
var_dump($sql);
echo '</pre>';