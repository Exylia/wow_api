<?php
// Controleur
require_once 'start_php.php';

if (empty($_GET['action'])) {
    $rosters = get_rosters($_SESSION['user_id']);

    if (empty($rosters)) {
        require_once CFG_PATH_FILE . '/view/roster/view_no_roster.phtml';
    } else {
        require_once CFG_PATH_FILE . '/view/roster/list_rosters.phtml';
    }
}

require_once 'stop_php.php';