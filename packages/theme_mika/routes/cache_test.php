<?php
defined('C5_EXECUTE') or die('Access Denied.');

// '/api' prefix
$router->all('/cache_test/normal/{param1}', 'CacheTest::normal');
$router->all('/cache_test/request_cache/{param1}', 'CacheTest::requestCache');
$router->all('/cache_test/expensive/{param1}', 'CacheTest::expensive');
