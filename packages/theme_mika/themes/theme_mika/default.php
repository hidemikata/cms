<?php

$view->inc('elements/header.php');

defined('C5_EXECUTE') or die("Access Denied.");

$a = new GlobalArea('header global');
$a->display();

$a = new Area('Main');
$a->display($c);

$a = new GlobalArea('footer global');
$a->display();

$view->inc('elements/footer.php');
