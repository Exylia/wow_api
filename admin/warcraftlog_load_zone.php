<?php

require_once 'start_php.php';

$zones = warcraftlogGetZones();

$sql_values_zone = '';
$sql_values_encounter = '';

foreach ($zones as $zone) {
    if ($zone['id'] === 3)
        continue;

    $sql_values_zone.= !empty($v) ? ', ' : '';
    $sql_values_zone.= '(' . $pdo->quote($zone['id']) . ', ' . $pdo->quote($zone['name']) . ')';

    foreach ($zone['encounters'] as $encounter) {
        $sql_values_encounter.= !empty($sql_values_encounter) ? ', ' : '';
        $sql_values_encounter.= '(' . $pdo->quote($encounter ['id']) . ', ' . $pdo->quote($zone['id']) . ', ' . $pdo->quote($encounter['name']) . ')';
    }
}

$sql = 'INSERT INTO ' . CFG_TABLE_WARCRAFTLOG_ZONE . ' (zone_id, name) VALUES ' . $sql_values_zone;

$pdo->query($sql);

$sql = 'INSERT INTO ' . CFG_TABLE_WARCRAFTLOG_ENCOUNTER . ' (encounter_id, zone_id, name) VALUES ' . $sql_values_encounter;

$pdo->query($sql);