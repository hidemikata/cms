<?php
defined('C5_EXECUTE') or die("Access Denied.");


//こう書けばスタックから引いてくる。
$stack = Stack::getByName('only_content_stack');
$stack->display();
?>
<?php
$view->inc('elements/footer.php');
