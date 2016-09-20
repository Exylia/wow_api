<?php

require_once 'lib_curl.php';
require_once 'lib_wow_character.php';
require_once 'lib_wow_guild.php';
require_once 'lib_wow_item.php';

$server = 'Uldaman';
$character_name = 'Huanna';

$method = 'GET';
$url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=items,stats&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

$response = sendRestRequest($method, $url);

$guild_members_json = json_decode($response['body'], true);

$infos = (array) $guild_members_json;

echo '<pre>';
var_dump($infos);
echo '</pre>';