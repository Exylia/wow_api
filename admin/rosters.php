<?php
// Controleur
require_once 'start_php.php';

$sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' ';

$rs = $pdo->query($sql);

require_once 'stop_php.php';



// Vue
require_once 'start_html.php';

require_once 'stop_html.php';