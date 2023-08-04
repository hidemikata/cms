<?php
defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\GlobalArea;

$c = Page::getCurrentPage();
$p = new Permissions($c);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  $collentionName = $c->getCollectionName(); //seoのページ名
  $pageTitle = $collentionName . '|' . 'ConcreteCMSで鹿';
  ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <?php
  //デフォルトで読み込み（style.css）
  ?>
  <link href="<?= $view->getThemePath() ?>/css/style.css" rel="stylesheet">
  <?php
  //テーマのハンドル名でファイルがあれば読み込み
  $template_handle_name = $c->getPageTemplateHandle();
  $css_full_path = DIR_BASE . $view->getThemePath() . '/css/' . $template_handle_name . '.css';
  if (file_exists($css_full_path)) {
  ?>
    <link href="<?= $view->getThemePath() ?>/css/<?= $template_handle_name ?>.css" rel="stylesheet">
  <?php
  }
  ?>

  <?php
  View::element('header_required', [
    'pageTitle' => isset($pageTitle) ? $pageTitle : '',
    'pageDescription' => isset($pageDescription) ? $pageDescription : '',
    'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
  ]);
  ?>

</head>

<body <?= $p->canViewToolbar() ? 'style="margin-top:47px"' : '' ?>>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
    </symbol>
  </svg>

  <?php
  $a = new GlobalArea('header global');
  $a->display();
