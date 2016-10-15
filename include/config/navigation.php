<?php
$navigation_top_left = array(
    array(
        'name' => 'Roster',
        'url' => CFG_PATH_HTTP . '/roster/index.php',
        'acl'  => 'member',
    ),
    array(
        'name' => 'Guilde',
        'url' => CFG_PATH_HTTP . '/admin/guilde.php',
        'acl'  => 'member',
    ),
);

$navigation_top_right = array(
    array(
        'name' => 'Mon compte',
        'url'  => CFG_PATH_HTTP . '/account.php',
        'acl'  => 'member',
    ),
    array(
        'name' => 'Deconnexion',
        'url'  => CFG_PATH_HTTP . '/logout.php',
        'acl'  => 'member',
    ),
);

/**
 * [html_menu_top description]
 * @return [type] [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function html_menu_top() {
    global $navigation_top_left;
    global $navigation_top_right;

    $html = '<ul class="nav navbar-nav">';

    foreach ($navigation_top_left as $key => $item) {
        if (empty($item['acl']) || (!empty($_SESSION['acl']) && in_array($item['acl'], $_SESSION['acl']))) {
            $html .= '<li><a href="' . $item['url'] . '">' . $item['name'] . '</a></li>';
        }
    }

    $html.= '</ul>';

    $html.= '<ul class="nav navbar-nav navbar-right">';

    foreach ($navigation_top_right as $key => $item) {
        if (empty($item['acl']) || (!empty($_SESSION['acl']) && in_array($item['acl'], $_SESSION['acl']))) {
            $html .= '<li><a href="' . $item['url'] . '">' . $item['name'] . '</a></li>';
        }
    }

    $html.= '</ul>';

    return $html;
}