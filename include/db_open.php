<?php

$pdo = new PDO('mysql:host=' . CFG_DB_HOST . ';dbname=' . CFG_DB_NAME, CFG_DB_USER, CFG_DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));