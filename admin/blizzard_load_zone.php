<?php

require_once 'start_php.php';

$zones = getZones();

$sql_zone_values = '';
$sql_boss_values = '';

foreach ($zones['zones'] as $zone) {
    if (in_array($zone['id'], $cfg_current_raid)) {
        $sql_zone_values.= !empty($sql_zone_values) ? ', ' : '';
        $sql_zone_values.= '(' . $pdo->quote($zone['id']) . ', ' . $pdo->quote($zone['name']) . ')';

        foreach ($zone['bosses'] as $boss) {
            $sql_boss_values.= !empty($sql_boss_values) ? ', ' : '';
            $sql_boss_values.= '(' . $pdo->quote($boss['id']) . ', ' . $pdo->quote($zone['id']) . ', ' . $pdo->quote($boss['name']) . ')';
        }
    }
}

$sql = 'INSERT INTO ' . CFG_TABLE_BLIZZARD_ZONE . ' (zone_id, name) VALUES ' . $sql_zone_values;
$pdo->query($sql);

$sql = 'INSERT INTO ' . CFG_TABLE_BLIZZARD_ENCOUNTER . ' (encounter_id, zone_id, name) VALUES ' . $sql_boss_values;
$pdo->query($sql);