<?php

function var_dump_utils($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function redirect($url) {
    header('Location: ' . $url);
    exit();
}

?>