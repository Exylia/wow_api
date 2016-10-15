<?php
require_once 'start_php.php';

if (!empty($_POST)) {
	if (empty($_POST['username'])) {
		$error['username'] = 'Nom d\'utilisateur : champ requis';
	}

	if (empty($_POST['password'])) {
		$error['password'] = 'Mot de passe : champ requis';
	}

	if (empty($error)) {
		$sql = 'SELECT * FROM ' . CFG_TABLE_USER . ' ';
		$sql.= 'WHERE ';
		$sql.= 'username = ' . $pdo->quote($_POST['username']) . ' AND ';
		$sql.= 'password = ' . $pdo->quote(md5($_POST['password']));

		$user = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

		if (!$user) {
			$error[] = 'Utilisateur et/ou mot de passe incorrect';
		} else {
			session_start();
			$_SESSION['user_id'] = $user['user_id'];
			$_SESSION['acl'] = (!empty($user['acl']) ? explode('|', $user['acl']) : array('member'));
			session_regenerate_id();
			redirect(CFG_PATH_HTTP . '/index.php');
		}
	}
}

require_once 'stop_php.php';

require_once 'view/login.phtml';

?>