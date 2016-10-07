<?php
require_once 'start_php.php';

if (empty($_GET['id'])) {
    redirect(CFG_PATH_HTTP . '/admin/rosters/index.php');
}

if (!empty($_POST)) {

}

$sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' ';
$sql.= 'WHERE ';
$sql.= 'roster_id = ' . $pdo->quote($_GET['id']) . '';

$roster = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$realms = getRealm();

require_once 'view_view_roster.phtml';

require_once 'stop_php.php';

?>