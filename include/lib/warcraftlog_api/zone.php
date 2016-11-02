<?php

function  warcraftlogGetZones () {
    global $cfg_warcraftlog_api_key;

    $url = 'https://www.warcraftlogs.com:443/v1/zones?api_key=' . $cfg_warcraftlog_api_key;
    $method = 'GET';

    $response = sendRestRequest($method, $url);

    return (array) json_decode($response['body'], true);
}