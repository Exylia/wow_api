<?php
// Controleur
require_once 'start_php.php';

$rosters = get_rosters();

require_once 'stop_php.php';



// Vue
require_once 'start_html.php';

?>

<?php if(empty($rosters)) : ?>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="well well-lg">
                <a class="btn btn-primary center-block" href="<?php echo CFG_PATH_HTTP . '/admin/rosters.php?action=add'?>">
                    Ajouter un roster
                </a>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php

require_once 'stop_html.php';