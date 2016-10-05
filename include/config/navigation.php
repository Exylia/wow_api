<?php
$navigation_top = array(
    array(
        'name' => 'Roster',
        'url' => CFG_PATH_HTTP . '/admin/rosters/index.php',
    ),
    array(
        'name' => 'Guilde',
        'url' => CFG_PATH_HTTP . '/admin/guilde.php',
    ),
);

/**
 * [html_menu_top description]
 * @return [type] [description]
 * @author Sylvain Bouchet <sylvain.bouchet@globalis-ms.com>
 */
function html_menu_top() {
    global $navigation_top;

    $html = '<ul class="nav navbar-nav">';

    foreach ($navigation_top as $key => $item) {
        $html .= '<li><a href="' . $item['url'] . '">' . $item['name'] . '</a></li>';
    }

    $html.= '</ul>';

    return $html;
}