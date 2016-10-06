<?php
require_once 'start_php.php';

if (empty($_GET['id'])) {
    redirect(CFG_PATH_HTTP . '/admin/rosters/index.php');
}

if (!empty($_POST)) {

    if (empty($_POST['name'])) {
        $error['name_roster'] = "Champ obligatoire";
    }

    if(empty($error)) {
        $sql = 'UPDATE ' . CFG_TABLE_ROSTER . ' SET ';
        $sql.= 'name = ' . $pdo->quote($_POST['name']) . ' ';
        $sql.= 'WHERE ';
        $sql.= 'roster_id = ' . $pdo->quote($_GET['id']);

        $pdo->query($sql);

        redirect(CFG_PATH_HTTP . '/admin/rosters/index.php');
    }
}

$sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' ';
$sql.= 'WHERE ';
$sql.= 'roster_id = ' . $pdo->quote($_GET['id']) . '';

$roster = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

require_once 'view_add_edit_roster.phtml';

require_once 'stop_php.php';

?>