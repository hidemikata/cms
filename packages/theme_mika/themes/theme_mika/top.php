<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');

//container for grid
?>
<div class="container top-body">
<div class="row">
<div class="col-sm-3">
<?php
$a = new Area('left');
$a->display($c);
?>
</div>
<div class="col-sm-9">
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
