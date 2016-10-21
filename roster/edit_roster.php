<?php
require_once 'start_php.php';

if (empty($_GET['id'])) {
    redirect(CFG_PATH_HTTP . '/rosters/index.php');
}

if (!empty($_POST)) {

    if (empty($_POST['name'])) {
        $error['name_roster'] = "Champ obligatoire";
    }

    if (empty($_POST['required_ilvl'])) {
        $error['required_ilvl'] = "Champ obligatoire";   
    }

    if(empty($error)) {
        $sql = 'UPDATE ' . CFG_TABLE_ROSTER . ' SET ';
        $sql.= 'name = ' . $pdo->quote($_POST['name']) . ', ';
        $sql.= 'required_ilvl = ' . $pdo->quote($_POST['required_ilvl']);
        $sql.= 'WHERE ';
        $sql.= 'roster_id = ' . $pdo->quote($_GET['id']);

        $pdo->query($sql);

        redirect(CFG_PATH_HTTP . '/roster/index.php');
    }
}

$sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' ';
$sql.= 'WHERE ';
$sql.= 'roster_id = ' . $pdo->quote($_GET['id']) . '';

$roster = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

require_once CFG_PATH_FILE . '/view/roster/add_edit_roster.phtml';

require_once 'stop_php.php';

?>