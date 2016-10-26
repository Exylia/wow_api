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

        $labels = array();
        $datas_nm = array();
        $datas_hm = array();
        $datas_mm = array();

        foreach ($character['progression']['raids'][35]['bosses'] as $boss) {
            $labels[] = $boss['name'];
            $datas_nm[] = $boss['normalKills'];
            $datas_hm[] = $boss['heroicKills'];
            $datas_mm[] = $boss['mythicKills'];
        }

        require_once 'view/show_character.phtml';
    }
}

require_once 'stop_php.php';
