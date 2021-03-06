<?php

require_once 'lib/utils.php';
require_once 'config/config.php';

// On test si l'utilisateur est connecté, si non on redirige vers la page de connexion
session_start();

if (!in_array(basename($_SERVER['PHP_SELF']), $page_no_connect) && empty($_SESSION['user_id'])) {
	redirect(CFG_PATH_HTTP . '/login.php');
}

require_once 'db_open.php';
require_once 'config/navigation.php';
require_once 'lib/global_lib.php';
require_once 'lib/lib_form.php';
require_once 'lib/wow_api/wow_api_loader.php';
require_once 'lib/warcraftlog_api/warcraftlog_api.php';

if (file_exists('local_lib.php')) {
    require 'local_lib.php';
}