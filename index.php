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
        }
    }
}

require_once 'stop_php.php';

require_once 'view/index.phtml';
