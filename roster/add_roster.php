<?php
require_once 'start_php.php';

// Envoi du formulaire
if (!empty($_POST)) {
    if (empty($_POST['name'])) {
        $error['name_roster'] = "Champ obligatoire";
    }

    if (empty($error)) {
        $sql = 'INSERT INTO ' . CFG_TABLE_ROSTER . ' SET ';
        $sql.= 'name = ' . $pdo->quote($_POST['name']) . ' ';

        $pdo->query($sql);

        redirect(CFG_PATH_HTTP . '/roster/index.php');
    }
}

require_once CFG_PATH_FILE . '/view/roster/add_edit_roster.phtml';

require_once 'stop_php.php';

?>