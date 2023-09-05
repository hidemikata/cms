<?php
defined('C5_EXECUTE') or die('Access Denied.');

// '/api' prefix
$router->all('/test/block_api', 'BlockApiAjax::test');
