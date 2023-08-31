<?php
defined('C5_EXECUTE') or die('Access Denied.');

// '/api' prefix
$router->all('/view_request_content', 'CheckRequest::check');
