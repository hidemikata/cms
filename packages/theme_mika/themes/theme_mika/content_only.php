<?php
defined('C5_EXECUTE') or die("Access Denied.");


//$B$3$&=q$1$P%9%?%C%/$+$i0z$$$F$/$k!#(B
$stack = Stack::getByName('only_content_stack');
$stack->display();
?>
<?php
$view->inc('elements/footer.php');
