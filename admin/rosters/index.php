<?php
// Controleur
require_once 'start_php.php';


if (empty($_GET['action'])) {
    $rosters = get_rosters();

    if (empty($rosters)) {
        require_once 'view_no_roster.phtml';
    } else {
        require_once 'view_list_rosters.phtml';
    }
}

require_once 'stop_php.php';