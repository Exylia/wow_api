<?php

/**
 * [getCharacterAchievements description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterAchievements($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=achievements&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterAllInformations description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterAllInformations($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=stats,items&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterAppearance description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterAppearance($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=appearance&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterFeed description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterFeed($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=feed&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterGuild description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterGuild($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=guild&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterHunterPets description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterHunterPets($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=hunterPets&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterItems description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterItems($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=items&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterMounts description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterMounts($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=mounts&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterPets description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterPets($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=pets&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterPetSlots description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterPetSlots($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=petSlots&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterProfessions description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterProfessions($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=professions&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterProgression description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterProgression($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=progression&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterPvp description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterPvp($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=pvp&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterQuests description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterQuests($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=quests&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterReputation description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterReputation($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=reputation&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterStatistics description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterStatistics($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=statistics&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterStats description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterStats($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=stats&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterTalents description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterTalents($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=talents&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterTitles description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterTitles($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=titles&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getCharacterAudit description]
 * @param  [type] $server         [description]
 * @param  [type] $character_name [description]
 * @return [type]                 [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getCharacterAudit($server, $character_name)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/character/' . $server . '/' . $character_name . '?fields=audit&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}