<?php

require_once 'db_open.php';
require_once 'lib/wow_api/wow_api_loader.php';

$classes = getListClasses();

$sql = 'INSERT INTO ' . CFG_TABLE_CLASS . ' ';
$sql.= '(`class_id`, `name`) ';
$sql.= 'VALUES ';

foreach($classes['classes'] as $class) {
    $sql.= '(' . $pdo->quote($class['id']) . ', ' . $pdo->quote($class['name']) . '), ';
}

$sql = substr($sql, 0 , -2);

$pdo->query($sql);