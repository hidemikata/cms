<?php
defined('C5_EXECUTE') or die("Access Denied.");

$view->inc('elements/header.php');

$a = new Area('Main');
$a->display($c);

$view->inc('elements/footer.php');
