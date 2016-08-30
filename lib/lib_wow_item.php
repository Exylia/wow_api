<?php

/**
 * [getItem description]
 * @param  [type] $item_id [description]
 * @return [type]          [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getItem($item_id)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/item/' . $item_id . '?local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}

/**
 * [getItemSet description]
 * @param  [type] $set_id [description]
 * @return [type]         [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function getItemSet($set_id)
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/item/set/' . $set_id . '?local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    $guild_members_json = json_decode($response['body'], true);

    return (array) $guild_members_json;
}
