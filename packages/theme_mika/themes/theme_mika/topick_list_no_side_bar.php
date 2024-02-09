<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');

//container for grid
?>
<div class="container top-body">
    <div class="row">
        <div class="col-sm-12">
            <?php
            $a = new Area('Main');
            $a->display($c);
            ?>
        </div>
    </div>
    <?php


    ?>
</div>
<?php
$view->inc('elements/footer.php');
