<?php

/**
 * [get_rosters description]
 * @return [type] [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function get_rosters() {
    global $pdo;

    $rosters = array ();

    $sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' ';
    $rs = $pdo->query($sql);

    while ($roster = $rs->fetch(PDO::FETCH_ASSOC)) {
        $rosters[] = $roster;
    }

    return $rosters;
}