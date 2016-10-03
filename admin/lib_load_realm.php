<?php

require_once 'start_php.php';

$list_server = getListServer();

$sql = 'INSERT INTO ' . CFG_TABLE_REALM . ' ';
$sql.= '(name, locale) VALUES ';

foreach ($list_server['realms'] as $server) {
    $sql.= '(' . $pdo->quote($server['name']) . ', ' . $pdo->quote($server['locale']) . '), ';
}

$sql = substr($sql, 0, -2);

$pdo->query($sql);