<?php

function getZones()
{
    $method = 'GET';
    $url = 'https://eu.api.battle.net/wow/zone/?local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

    $response = sendRestRequest($method, $url);

    return (array) json_decode($response['body'], true);
}