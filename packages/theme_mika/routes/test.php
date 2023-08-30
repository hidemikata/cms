<?php
defined('C5_EXECUTE') or die('Access Denied.');

// '/api' prefix
$router->all('/api_test/test2/{param2}', 'ApiTest::test2');
