<?php
require_once 'start_php.php';

if (!empty($_POST)) {
    if (empty($_POST['username'])) {
        $error['username'] = 'Nom d\'utilisateur : champ requis';
    }

    if (empty($_POST['email'])) {
        $error['email'] = 'Adresse email : Champ requis';
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Mot de passe : champ requis';
    }

    if (empty($_POST['password_confirm'])) {
        $error['password_confirm'] = 'Confirmation mot de passe : champ requis';
    }

    // Verification doublon username
    $sql = 'SELECT * FROM ' . CFG_TABLE_USER . ' ';
    $sql.= 'WHERE ';
    $sql.= 'username = ' . $pdo->quote($_POST['username']);

    if ($pdo->query($sql)->fetch(PDO::FETCH_ASSOC)) {
        $error['username'] = 'Nom d\'utilisateur : ce nom existe deja';
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'Adresse email : l\'adresse email n\'est pas valide';
    } else {
        $sql = 'SELECT * FROM ' . CFG_TABLE_USER . ' ';
        // verification doublon email
        $sql.= 'WHERE ';
        $sql.= 'email = ' . $pdo->quote($_POST['email']);

        if ($pdo->query($sql)->fetch(PDO::FETCH_ASSOC)) {
            $error['email'] = 'Adresse email : cette adresse email existe deja';
        }
    }

    $password_pattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
    if (preg_match($password_pattern, $_POST['password']) <= 0) {
        $error['password'] = 'Mot de passe :  le mot de passe doit contenir 8 character';
    }

    if ($_POST['password_confirm'] !== $_POST['password']) {
        $error['password_confirm'] = 'Confirmation mot de passe : le mot de passe ne correspond pas';
    }

    if (empty($error)) {
        $sql = 'INSERT INTO ' . CFG_TABLE_USER . ' SET ';
        $sql.= 'username = ' . $pdo->quote($_POST['username']) . ', ';
        $sql.= 'email    = ' . $pdo->quote($_POST['email']) . ', ';
        $sql.= 'password = ' . $pdo->quote(md5($_POST['password']));

        $pdo->query($sql);

        redirect(CFG_PATH_HTTP . '/index.php');
    }
}

require_once 'stop_php.php';

require_once 'view/signup.phtml';

?>