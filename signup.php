<?php
require_once 'start_php.php';

if (!empty($_POST)) {
    if (empty($_POST['username'])) {
        $error['username'] = "Champ requis";
    }

    if (empty($_POST['email'])) {
        $error['email'] = "Champ requis";
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Champ requis";
    }

    if (empty($_POST['password_confirm'])) {
        $error['password_confirm'] = "Champ requis";
    }

    // Verification doublon username
    $sql = 'SELECT * FROM ' . CFG_TABLE_USER . ' ';
    $sql.= 'WHERE ';
    $sql.= 'username = ' . $pdo->quote($_POST['username']);

    if ($pdo->query($sql)->fetch(PDO::FETCH_ASSOC)) {
        $error['username'] = 'Ce nom d\'utilisateur existe deja';
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'L\'adresse email n\'est pas valide';
    } else {
        // verification doublon email
        $sql = 'SELECT * FROM ' . CFG_TABLE_USER . ' ';
        $sql.= 'WHERE ';
        $sql.= 'email = ' . $pdo->quote($_POST['email']);

        if ($pdo->query($sql)->fetch(PDO::FETCH_ASSOC)) {
            $error['email'] = 'Cette adresse email est deja utilisee';
        }
    }

    $password_pattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
    if (preg_match($password_pattern, $_POST['password']) <= 0) {
        $error['password'] = 'Le mot de passe doit contenir 8 character';
    }

    if ($_POST['password_confirm'] !== $_POST['password']) {
        $error['password_confirm'] = 'Le mot de passe ne correspond pas';
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