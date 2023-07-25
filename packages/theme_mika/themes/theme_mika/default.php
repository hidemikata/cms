<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\GlobalArea;
?>
<!DOCTYPE html>
<head>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>
</head>
<body>
<?php

$a = new GlobalArea('header global');
$a->display();

$a = new Area('Main');
$a->display($c);

$a = new GlobalArea('footer global');
$a->display();

?>
<?php View::element('footer_required'); ?>
<script type="text/javascript" src="<?=$view->getThemePath()?>/main.js"></script>

</body>
</html>

