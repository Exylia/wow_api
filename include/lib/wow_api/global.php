<?php

/**
 * [getListServer description]
 * @return [type] [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getListServer()
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/realm/status?local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    return (array) json_decode($response['body'], true);
}

/**
 * [getListClasses description]
 * @return [type] [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getListClasses()
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/data/character/classes?locale=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    return (array) json_decode($response['body'], true);
}

/**
 * [getListRaces description]
 * @return [type] [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getListRaces()
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/data/character/races?locale=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    return (array) json_decode($response['body'], true);
}