<?php
define('CFG_LOCAL', 'fr_FR');
define('CFG_API_KEY', 'gf5ynqfqhzzrsmjr556c5t8nmf7fvrp5');

/**
 * [getGuildAchievements description]
 * @param  [type] $server [description]
 * @param  [type] $guild  [description]
 * @return [type]         [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getGuildAchievements($server, $guild)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/guild/' . $server . '/' . $guild . '?fields=achievements&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getGuildAllInformation description]
 * @param  [type] $server [description]
 * @param  [type] $guild  [description]
 * @return [type]         [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getGuildAllInformations($server, $guild)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/guild/' . $server . '/' . $guild . '?fields=achievements,challenge,members,news&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getGuildChallenge description]
 * @param  [type] $server [description]
 * @param  [type] $guild  [description]
 * @return [type]         [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getGuildChallenge($server, $guild)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/guild/' . $server . '/' . $guild . '?fields=challenge&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getGuildMembers description]
 * @param  [type] $server [description]
 * @param  [type] $guild  [description]
 * @return [type]         [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getGuildMembers($server,$guild)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/guild/' . $server . '/' . $guild . '?fields=members&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getGuildNews description]
 * @param  [type] $server [description]
 * @param  [type] $guild  [description]
 * @return [type]         [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getGuildNews($server, $guild)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/guild/' . $server . '/' . $guild . '?fields=news&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getGuildProfile description]
 * @param  [type] $server [description]
 * @param  [type] $guild  [description]
 * @return [type]         [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getGuildProfile($server, $guild)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/guild/' . $server . '/' . $guild . '?fields=&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}