<?php

require_once 'start_php.php';

if (!empty($_GET)) {
    if (empty($_GET['realm'])) {
        $error['realm'] = "Serveur : champ obligatoire";
    }

    if (empty($_GET['name'])) {
        $error['name'] = "Nom : champ obligatoire";
    }

    if (empty($error)) {
        // Recuperation des informations du personnage
        $character = getCharacter($_GET['realm'], $_GET['name']);

        if (!empty($character['status']) && $character['status'] === 'nok') {
            $error['all'] = "Personnage introuvable";

            require_once 'view/index.phtml';
            exit;
        }

        $raid_progress = array();

        // For each raid in config
        foreach ($cfg_current_raid as $raid_id) {

            $raid_progress[$raid_id]['name'] = $character['progression']['raids'][$raid_id]['name']; // Name of raid

            // For each boss in the current raid
            foreach ($character['progression']['raids'][$raid_id]['bosses'] as $boss) {
                $raid_progress[$raid_id]['bosses'][] = $boss['name'];                       // Boss name
                $raid_progress[$raid_id]['kill']['NM'][] = $boss['normalKills'];            // Number of kill NM
                $raid_progress[$raid_id]['kill']['HM'][] = $boss['heroicKills'];            // Number of kill HM
                $raid_progress[$raid_id]['kill']['MM'][] = $boss['mythicKills'];            // Number of kill MM
            }
        }

        $ranking_tmp = warcraftlogGetRanking($_GET['name'], $_GET['realm']);
        $tmp = array();

        foreach ($ranking_tmp as $ranking) {
            $tmp[$ranking['encounter']][$ranking['difficulty']] = $ranking;
        }

        $ranking = array();

        foreach ($cfg_warcraftlog_raid as $raid_id) {
            $sql = 'SELECT E.encounter_id, E.zone_id, E.name as boss_name, Z.name as zone_name FROM ' . CFG_TABLE_WARCRAFTLOG_ENCOUNTER . ' E ';
            $sql.= 'LEFT JOIN ' . CFG_TABLE_WARCRAFTLOG_ZONE . ' Z ON E.zone_id = Z.zone_id ';
            $sql.= 'WHERE ';
            $sql.= 'E.zone_id = ' . $pdo->quote($raid_id);

            $res = $pdo->query($sql);

            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $ranking[$row['zone_id']]['name'] = $row['zone_name'];
                $ranking[$row['zone_id']]['bosses'][$row['encounter_id']] = $row['boss_name'];
                $ranking[$row['zone_id']]['dps']['NM'][$row['encounter_id']] = !empty($tmp[$row['encounter_id']][3]['total']) ? $tmp[$row['encounter_id']][3]['total'] : 0;
                $ranking[$row['zone_id']]['dps']['HM'][$row['encounter_id']] = !empty($tmp[$row['encounter_id']][4]['total']) ? $tmp[$row['encounter_id']][4]['total'] : 0;
                $ranking[$row['zone_id']]['dps']['MM'][$row['encounter_id']] = !empty($tmp[$row['encounter_id']][5]['total']) ? $tmp[$row['encounter_id']][5]['total'] : 0;
            }
        }

        require_once 'view/show_character.phtml';
    }
}

require_once 'stop_php.php';
