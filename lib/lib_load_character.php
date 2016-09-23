<?php
require_once 'db_open.php';
require_once 'lib_curl.php';
require_once 'lib_wow_character.php';
require_once 'lib_wow_guild.php';
require_once 'lib_wow_item.php';

if (!empty($_GET)) {
    if (empty($_GET['server'])) {
        $form_error['server'] = "Saisir un serveur";
    }

    if (empty($_GET['character_name'])) {
        $form_error['character_name'] = "Saisir un nom de personnage";
    }

    if (empty($form_error)) {

        $method = 'GET';
        $url = 'https://eu.api.battle.net/wow/character/' . $_GET['server'] . '/' . $_GET['character_name'] . '?fields=items,stats&local=' . CFG_LOCAL . '&apikey=' . CFG_API_KEY;

        $response = sendRestRequest($method, $url);

        $guild_members_json = json_decode($response['body'], true);

        $character = (array) $guild_members_json;

        $sql = 'SELECT * FROM `' . CFG_TABLE_CHARACTER . '` ';
        $sql.= 'WHERE ';
        $sql.= 'realm = ' . $pdo->quote($_GET['server']) . ' AND ';
        $sql.= 'name = ' . $pdo->quote($_GET['character_name']);

        $result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

        $character_id = '';

        // Le personnage existe deja dans la base -> mise à jour
        if ($result) {
            $character_id = $result['character_id'];

            $sql = 'UPDATE `' . CFG_TABLE_CHARACTER . '` SET ';
            $sql.= 'name    = \'' . $character['name']    . '\', ';
            $sql.= 'realm   = \'' . $character['realm']   . '\', ';
            $sql.= 'faction = \'' . $character['faction'] . '\', ';
            $sql.= 'class   = \'' . $character['class']   . '\', ';
            $sql.= 'race    = \'' . $character['race']    . '\', ';
            $sql.= 'gender  = \'' . $character['gender']  . '\', ';
            $sql.= 'level   = \'' . $character['level']   . '\', ';
            $sql.= 'region  = \'EU\' ';
            $sql.= 'WHERE ';
            $sql.= 'character_id = ' . $pdo->quote($character_id);

        } else {
            $sql = 'INSERT INTO `' . CFG_TABLE_CHARACTER . '` SET ';
            $sql.= 'name    = \'' . $character['name']    . '\', ';
            $sql.= 'realm   = \'' . $character['realm']   . '\', ';
            $sql.= 'faction = \'' . $character['faction'] . '\', ';
            $sql.= 'class   = \'' . $character['class']   . '\', ';
            $sql.= 'race    = \'' . $character['race']    . '\', ';
            $sql.= 'gender  = \'' . $character['gender']  . '\', ';
            $sql.= 'level   = \'' . $character['level']   . '\', ';
            $sql.= 'region  = \'EU\'';
        }





        $character_stats = $character['stats'];

        $sql = 'INSERT INTO ' . CFG_TABLE_CHARACTER_STATS . ' SET ';
        $sql.= 'character_id = 1, ';

        foreach ($character_stats as $key => $value) {
            $sql.= '`' . $key . '` = \'' . $value . '\', ';
        }

        print_r($sql);

        echo '<pre>';
        var_dump($character['stats']);
        echo '</pre>';
    }

}

?>

<form action="" method="GET">
    <div>
        <label for="server">Serveur</label>
        <input type="text" name="server" value="<?php echo !empty($_GET['server']) ? $_GET['server'] : ''?>">
    </div>
    <div>
        <label for="character_name">Nom</label>
        <input type="text" name="character_name" value="<?php echo !empty($_GET['character_name']) ? $_GET['character_name'] : ''?>">
    </div>
    <div>
        <button type="submit">Charger</button>
    </div>
</form>

<?php

require_once 'db_close.php';