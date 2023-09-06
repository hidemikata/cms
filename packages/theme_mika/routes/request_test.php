<?php
defined('C5_EXECUTE') or die('Access Denied.');

// '/api' prefix
$router->all('/request_test/test/{param1}', 'RequestTest::test');
