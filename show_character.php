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
        $character = (array) getCharacterAllInformations($_GET['realm'], $_GET['name']);

        if (!empty($character['status']) && $character['status'] === 'nok') {
            $error['all'] = "Personnage introuvable";

            require_once 'view/index.phtml';
            exit;
        }

        $raid_progress = array();

        // For each raid in config
        foreach($cfg_current_raid as $raid_id) {

            $raid_progress[$raid_id]['name'] = $character['progression']['raids'][$raid_id]['name']; // Name of raid

            // For each boss in the current raid
            foreach ($character['progression']['raids'][$raid_id]['bosses'] as $boss) {
                $raid_progress[$raid_id]['bosses'][] = $boss['name'];                       // Boss name
                $raid_progress[$raid_id]['kill']['NM'][] = $boss['normalKills'];            // Number of kill NM
                $raid_progress[$raid_id]['kill']['HM'][] = $boss['heroicKills'];            // Number of kill HM
                $raid_progress[$raid_id]['kill']['MM'][] = $boss['mythicKills'];            // Number of kill MM
            }
        }

        require_once 'view/show_character.phtml';
    }
}

require_once 'stop_php.php';
