<?php
defined('C5_EXECUTE') or die('Access Denied.');

// '/api' prefix
$router->all('/event_func/call/{param1}', 'EventFunc::call');
$router->all('/event_func/call_subscriber/{param1}', 'EventFunc::call_subscriber');
