<?php 

require_once 'start_php.php';

session_unset();
session_destroy();

redirect(CFG_PATH_HTTP . '/login.php');