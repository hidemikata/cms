<?php
defined('C5_EXECUTE') or die('Access Denied.');

// '/api' prefix
$router->all('/api_test/test/{param}', 'ApiTest::test');
$router->all('/api_test/test2/{param2}', 'ApiTest::test2');
$router->all('/api_test/config_test', 'ApiTest::config_test');
