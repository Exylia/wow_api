<?php

/**
 * [get_rosters description]
 * @return [type] [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function get_rosters($user_id) {
    global $pdo;

    $rosters = array ();

    $sql = 'SELECT * FROM ' . CFG_TABLE_ROSTER . ' R ';
    $sql.= 'LEFT JOIN ' . CFG_TABLE_ROSTER_USER . ' RU ON RU.roster_id = R.roster_id ';
    $sql.= 'WHERE ';
    $sql.= 'RU.user_id = ' . $pdo->quote($user_id);

    $rs = $pdo->query($sql);

    while ($roster = $rs->fetch(PDO::FETCH_ASSOC)) {
        $rosters[] = $roster;
    }

    return $rosters;
}

function view_ilvl($ilvl, $required_ilvl = 840) {
    if ($ilvl >= $required_ilvl + 10) {
        return '<span class="color-epic">' . $ilvl . '</span>';
    }

    if ($ilvl >= $required_ilvl + 5) {
        return '<span class="color-rare">' . $ilvl . '</span>';
    }

    if ($ilvl >= $required_ilvl ) {
        return '<span class="color-uncommon">' . $ilvl . '</span>';
    }

    if ($ilvl >= $required_ilvl - 5) {
        return '<span class="color-danger">' . $ilvl . '</span>';
    }

    return '<span class="color-grey">' . $ilvl . '</span>';
}