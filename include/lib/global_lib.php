<?php

function getRealm() {
    global $pdo;

    $sql = 'SELECT * FROM ' . CFG_TABLE_REALM . ' ';

    $realm = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $realm;
}