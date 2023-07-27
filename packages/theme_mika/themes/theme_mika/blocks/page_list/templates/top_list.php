<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>

<?php
$c = Page::getCurrentPage();
?>
<div class="row g-2">
<?php foreach ($pages as $page) { ?>
    <div class="col-sm-4">
    <div class="top-content-item text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
    <p>
        <a href="<?=$page->getCollectionLink()?>"><?=$page->getCollectionName()?></a>
    </p>
    <p>
    <?php
        $page->getCollectionDescription();
        ?>        
    </p>
    </div>
    </div>
    <?php } ?>
</div>

<?php if ($showPagination) { ?>
    <?php echo $pagination; ?>
<?php } ?>

