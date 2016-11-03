<?php
require_once dirname(__FILE__) . '/config.php';    // Methode pour les requetes cURL

// require_once dirname(__FILE__) . '/curl.php';    // Methode pour les requetes cURL
// require_once dirname(__FILE__) . '/zone.php';    // Methode pour les requetes cURL

function  warcraftlogGetZones () {
    global $cfg_warcraftlog_api_key;

    $url = 'https://www.warcraftlogs.com:443/v1/zones?api_key=' . $cfg_warcraftlog_api_key;
    $method = 'GET';

    $response = sendRestRequest($method, $url);

    return (array) json_decode($response['body'], true);
}

function warcraftlogGetRanking($name, $realm, $region = 'EU') {
    global $cfg_warcraftlog_api_key;

    $url = 'https://www.warcraftlogs.com:443/v1/rankings/character/' . $name . '/' . $realm . '/' . $region . '?api_key=' . $cfg_warcraftlog_api_key;
    $method = 'GET';

    $response = sendRestRequest($method, $url);

    return (array) json_decode($response['body'], true);
}