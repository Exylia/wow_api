<?php


/**
 * Envoie la requete a l'api et retourne sa reponse
 * @param  string   $method     Methode utiliser pour l'envoi de la requete (GET, POST, DELETE, PUT)
 * @param  string   $url        Url de l'api a interoger
 * @param  array    $data       Tableau contenant les parametres de la requete
 * @return mixed                Reponse de l'api
 */
function sendRestRequest($method, $url, $data = array(), $token = null)
{
    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $url);
    curl_setopt($handle, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($handle, CURLOPT_HEADER, 1);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($handle, CURLOPT_TIMEOUT, 3);

    switch($method) {
        case 'GET':
            break;
        case 'POST':
            curl_setopt($handle, CURLOPT_POST, true);
            curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($data));
            break;
        case 'PUT':
            curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($data));
            break;
        case 'DELETE':
            curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'DELETE');
            break;
        case 'HEAD':
            curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'HEAD');
            break;
    }

    $response = curl_exec($handle);

    $header_size = curl_getinfo($handle, CURLINFO_HEADER_SIZE);
    $code        = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    $header      = curl_header_to_array(substr($response, 0, $header_size));
    $body        = substr($response, $header_size);

    curl_close($handle);

    return array(
        'header' => $header,
        'body' => $body,
        'code' => $code,
    );
}

/**
 * [curl_header_to_array description]
 * @param  [type] $header [description]
 * @return [type]         [description]
 */
function curl_header_to_array($header)
{
    $headers_array = array();

    foreach (explode("\r\n", $header) as $i=> $line) {

        if (empty($line))
            continue;

        if ($i === 0) {
            $headers_array['http_code'] = $line;
        } else {
            list($key, $value) =explode(': ', $line);
            $headers_array[$key] = $value;
        }
    }

    return $headers_array;
}

