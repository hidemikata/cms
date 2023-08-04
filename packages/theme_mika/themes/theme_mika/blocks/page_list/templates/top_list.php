<?php
defined('C5_EXECUTE') or die('Access Denied.');
$ih = Loader::helper('image');
?>

<?php
$c = Page::getCurrentPage();
?>
<div class="row g-2">
  <?php //トータルページが欲しい時はPagelistのignorePermissionをやって、list->getTotalResults()で取れる。
  ?>
  <?php foreach ($pages as $page) {
    $img = $page->getAttribute('thumbnail');
    $thumb = $ih->getThumbnail($img, 208, 153, true);
    if ($thumb->src==''){
        $thumb->src = '/application/files/9916/9112/6253/imo.png';
    }
  ?>
    <div class="col-sm-4">
      <div class="card shadow-sm">
        <div class="top-list-thumnail">
          <a href="<?= $page->getCollectionLink() ?>"><img src="<?php echo $thumb->src ?>" /></a>
        </div>
        <div class="card-body">
          <p class="card-text top-list-body-text">
            <a href="<?= $page->getCollectionLink() ?>"><?= $page->getCollectionName() ?>
              <?= $page->getCollectionDescription(); ?>
            </a>
          </p>
          <div class="d-flex justify-content-between align-items-center">
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

</div>
<!-- default pagination
<div class="container">
  <div class="row">
  <div class="col-md-6 offset-md-3">
<?php if ($showPagination) { ?>
    <?php echo $pagination; ?>
<?php } ?>
  </div>
  </div>
-->

<div class="container">
  <div class="row p-3">
    <div class="col-md-6 offset-md-3">
      <?php if ($showPagination) {
      ?>
        <nav aria-label="Page navigation example">
          <?php
          $urlHelper = Core::make('helper/url');
          $pagination = $list->getPagination();
          if ($pagination->getTotalPages() > 1) {
          ?>
            <ul class="pagination justify-content-center">
              <?php
              if ($pagination->hasPreviousPage()) {
                $modoru_url = $urlHelper->setVariable($list->getQueryPaginationPageParameter(), $pagination->getPreviousPage());
              ?>
                <li class="page-item">
                  <a class="page-link" href="<?= $modoru_url ?>">Previous</a>
                </li>
              <?php
              } else {
              ?>
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
              <?php
              }
              ?>

              <?php for ($i = 0; $i < $pagination->getNbPages(); $i++) {
                $page_no = $i + 1;
                $is_active = $pagination->getCurrentPage() == $page_no ? true : false;
                $page_no_url = $urlHelper->setVariable($list->getQueryPaginationPageParameter(), $page_no);
                if ($is_active) {
              ?>
                  <li class="page-item active" aria-current="page">
                    <span class="page-link"><?= $page_no ?></span>
                  </li>
                <?php
                } else { ?>
                  <li class="page-item"><a class="page-link" href="<?= $page_no_url ?>"><?= $page_no ?></a></li>
                <?php
                }
                ?>
              <?php } ?>
              <?php
              if ($pagination->hasNextPage()) {
                $tugihe_url = $urlHelper->setVariable($list->getQueryPaginationPageParameter(), $pagination->getNextPage());
              ?>
                <li class="page-item">
                  <a class="page-link " href="<?= $tugihe_url ?>">Next</a>
                </li>
              <?php
              } else {
              ?>
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                </li>
              <?php

              }
              ?>
            </ul>
            <div class="container">
              <div class="row">
                <div class="col">
                </div>
                <div class="col">
                  <div>
                    <p class="pager-page"><?= $pagination->getCurrentPage() ?> / <?= $pagination->getNbPages() ?></p>
                  </div>
                </div>
                <div class="col">
                </div>
              </div>
            </div>
          <?php
          }

          ?>


        </nav>
      <?php } ?>


    </div>
  </div>



</div>
