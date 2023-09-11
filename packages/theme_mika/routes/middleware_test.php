<?php
defined('C5_EXECUTE') or die('Access Denied.');


// '/api' prefix
$router->all('/middleware_test/test/{param1}', 'MiddlewareTest::test');
//use MikaSrc\Http\Middleware\MySampleMiddleware;こっちにかいてもいいっぽい。
