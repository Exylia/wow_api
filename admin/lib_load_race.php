<?php

require_once 'start_php.php';

$races = getListRaces();

$sql = 'INSERT INTO ' . CFG_TABLE_RACE . ' ';
$sql.= '(`race_id`, `name`, `faction_id`) ';
$sql.= 'VALUES ';

foreach($races['races'] as $race) {
    $sql.= '(' . $pdo->quote($race['id']) . ', ' . $pdo->quote($race['name']) . ', ' . $pdo->quote($race['side'] === 'alliance' ? '0': '1') .  '), ';
}

$sql = substr($sql, 0 , -2);

$pdo->query($sql);