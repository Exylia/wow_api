<?php

require_once 'lib_curl.php';
require_once 'lib_wow_character.php';
require_once 'lib_wow_guild.php';
require_once 'lib_wow_item.php';

define('CFG_TABLE_CHARACTER', 'character');

$server = 'Uldaman';
$character_name = 'Ghiblik';

$method = 'GET';
$url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=items,stats&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

$response = sendRestRequest($method, $url);

$guild_members_json = json_decode($response['body'], true);

$character = (array) $guild_members_json;

$sql = 'INSERT INTO `' . CFG_TABLE_CHARACTER . '` SET ';
$sql.= 'name    = \'' . $character['name']    . '\', ';
$sql.= 'realm   = \'' . $character['realm']   . '\', ';
$sql.= 'faction = \'' . $character['faction'] . '\', ';
$sql.= 'class   = \'' . $character['class']   . '\', ';
$sql.= 'race    = \'' . $character['race']    . '\', ';
$sql.= 'gender  = \'' . $character['gender']  . '\', ';
$sql.= 'level   = \'' . $character['level']   . '\', ';
$sql.= 'region  = \'EU\'';



echo '<pre>';
var_dump($character['stats']);
echo '</pre>';