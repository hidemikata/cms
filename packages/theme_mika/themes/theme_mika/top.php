<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');

//container for grid
?>
<div class="container">
<div class="row">
<div class="col-2">
<?php
$a = new Area('left');
$a->display($c);
?>
</div>
<div class="col-10">
<?php
$a = new Area('right');
$a->display($c);
?>
    </div>
</div>
<?php


?>
</div>
<?php
$view->inc('elements/footer.php');
