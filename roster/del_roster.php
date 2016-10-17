<?php
require_once 'start_php.php';

if (empty($_GET['id'])) {
    redirect(CFG_PATH_HTTP . '/rosters/index.php');
}

$sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' R ';
$sql.= 'LEFT JOIN ' . CFG_TABLE_ROSTER_USER . ' RU ON RU.roster_id = R.roster_id ';
$sql.= 'WHERE ';
$sql.= 'R.roster_id = ' . $pdo->quote($_GET['id'])          . ' AND ';
$sql.= 'RU.user_id  = ' . $pdo->quote($_SESSION['user_id']) . ' ';

var_dump($sql);

$result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $sql = 'DELETE FROM ' . CFG_TABLE_ROSTER . ' ';
    $sql.= 'WHERE ';
    $sql.= 'roster_id = ' . $pdo->quote($_GET['id']);

    $pdo->query($sql);

    $sql = 'DELETE FROM ' . CFG_TABLE_ROSTER_USER . ' ';
    $sql.= 'WHERE ';
    $sql.= 'roster_id = ' . $pdo->quote($_GET['id']);

    $pdo->query($sql);

    $sql = 'DELETE FROM ' . CFG_TABLE_ROSTER_CHARACTER . ' ';
    $sql.= 'WHERE ';
    $sql.= 'roster_id = ' . $pdo->quote($_GET['id']);

    $pdo->query($sql);
}


redirect(CFG_PATH_HTTP . '/roster/index.php');

require_once 'stop_php.php';