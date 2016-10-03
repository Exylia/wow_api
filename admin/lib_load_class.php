<?php

require_once 'start_php.php';

$classes = getListClasses();

$sql = 'INSERT INTO ' . CFG_TABLE_CLASS . ' ';
$sql.= '(`class_id`, `name`) ';
$sql.= 'VALUES ';

foreach($classes['classes'] as $class) {
    $sql.= '(' . $pdo->quote($class['id']) . ', ' . $pdo->quote($class['name']) . '), ';
}

$sql = substr($sql, 0 , -2);

$pdo->query($sql);