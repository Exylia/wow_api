<?php

require_once 'db_open.php';
require_once 'config/config.php';
require_once 'config/navigation.php';
require_once 'lib/wow_api/wow_api_loader.php';

if (file_exists('local_lib.php')) {
    require 'local_lib.php';
}